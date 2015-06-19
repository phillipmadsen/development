<?php namespace AP\Repositories\Project;

use AP\Repositories\RepositoryInterface;

/**
 * Interface ProjectInterface
 * @package AP\Repositories\Project
 * @author Phillip Madsen
 */
interface ProjectInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}