<?php namespace AP\Repositories\Page;

use AP\Repositories\RepositoryInterface;

/**
 * Interface PageInterface
 * @package AP\Repositories\Page
 * @author Phillip Madsen
 */
interface PageInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug, $isPublished = false);
}