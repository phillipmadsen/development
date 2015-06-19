<?php namespace AP\Repositories\Article;

use AP\Repositories\RepositoryInterface;

/**
 * Interface ArticleInterface
 * @package AP\Repositories\Article
 * @author Phillip Madsen
 */
interface ArticleInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}