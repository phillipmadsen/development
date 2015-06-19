<?php namespace AP\Repositories\Video;

use AP\Repositories\RepositoryInterface;

/**
 * Interface VideoInterface
 * @package AP\Repositories\Video
 * @author Phillip Madsen
 */
interface VideoInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}