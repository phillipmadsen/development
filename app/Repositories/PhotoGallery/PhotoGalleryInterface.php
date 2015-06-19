<?php namespace AP\Repositories\PhotoGallery;

use AP\Repositories\RepositoryInterface;

/**
 * Interface PhotoGalleryInterface
 * @package AP\Repositories\PhotoGallery
 * @author Phillip Madsen
 */
interface PhotoGalleryInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}