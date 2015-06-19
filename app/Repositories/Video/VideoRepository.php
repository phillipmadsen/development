<?php namespace AP\Repositories\Video;

use Config;
use AP\Models\Video;
use VideoApi;
use AP\Repositories\CrudableInterface;
use AP\Repositories\RepositoryAbstract;
use AP\Repositories\RepositoryInterface as RepositoryInterface;
use AP\Exceptions\Validation\ValidationException;
use AP\Repositories\AbstractValidator as Validator;

/**
 * Class VideoRepository
 * @package AP\Repositories\Video
 * @author Phillip Madsen
 */
class VideoRepository extends RepositoryAbstract implements VideoInterface, CrudableInterface {

    /**
     * @var
     */
    protected $perPage;

    /**
     * @var \Video
     */
    protected $video;

    /**
     * Rules
     *
     * @var array
     */
    protected static $rules = [
        'title'    => 'required',
        'video_id' => 'required',
        'type'     => 'required'
    ];

    /**
     * @param Video $video
     */
    public function __construct(Video $video) {

        $this->video = $video;
        $config = Config::get('fully');
        $this->perPage = $config['per_page'];
    }

    /**
     * @return mixed
     */
    public function all() {

        return $this->video->get();
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug){

        $this->video = $this->video->where('slug', $slug)->first();

        $this->video->setDetailsAttribute($this->getDetails($this->video->type, $this->video->video_id));

        return $this->video;
    }

    /**
     * Get paginated videos
     *
     * @param int $page Number of videos per page
     * @param int $limit Results per page
     * @param boolean $all Show published or all
     * @return StdClass Object with $items and $totalItems for pagination
     */
    public function paginate($page = 1, $limit = 10, $all = false, $notLazy = false) {

        $result = new \StdClass;
        $result->page = $page;
        $result->limit = $limit;
        $result->totalItems = 0;
        $result->items = array();

        $query = $this->video->orderBy('created_at', 'DESC')->where('lang', $this->getLang());

        $videos = $query->skip($limit * ($page - 1))
            ->take($limit)
            ->get();

        $result->totalItems = $this->totalVideos();
        $result->items = $videos->all();

        if(!$notLazy) {
            // set video details
            foreach ($result->items as $k => $v) {
                $v->setDetailsAttribute($this->getDetails($v['attributes']['type'], $v['attributes']['video_id']));
            }
        }

        return $result;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id) {

        $this->video = $this->video->findOrFail($id);

        $this->video->setDetailsAttribute($this->getDetails($this->video->type, $this->video->video_id));

        return $this->video;
    }

    /**
     * @param $attributes
     * @return bool|mixed
     * @throws \AP\Exceptions\Validation\ValidationException
     */
    public function create($attributes) {

        if ($this->isValid($attributes)) {

            $this->video->lang=$this->getLang();
            $this->video->fill($attributes)->save();
            $this->video->resluggify();
            return true;
        }

        throw new ValidationException('Video validation failed', $this->getErrors());
    }

    /**
     * @param $id
     * @param $attributes
     * @return bool|mixed
     * @throws \AP\Exceptions\Validation\ValidationException
     */
    public function update($id, $attributes) {

        $this->video = $this->find($id);

        if ($this->isValid($attributes)) {

            $this->video->resluggify();
            $this->video->fill($attributes)->save();
            return true;
        }

        throw new ValidationException('Video validation failed', $this->getErrors());
    }

    /**
     * @param $id
     * @return mixed|void
     */
    public function delete($id) {

        $video = $this->video->find($id);
        $video->delete();
    }

    /**
     * Get total video count
     * @return mixed
     */
    protected function totalVideos() {

        return $this->video->where('lang', $this->getLang())->count();
    }

    public function getDetails($type, $id) {

        $details = VideoApi::setType($type)->getVideoDetail($id);
        return $details;
    }
}