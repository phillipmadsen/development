<?php namespace AP\Repositories\News;

use AP\Repositories\RepositoryInterface;

/**
 * Interface NewsInterface
 * @package AP\Repositories\News
 * @author Phillip Madsen
 */
interface NewsInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}