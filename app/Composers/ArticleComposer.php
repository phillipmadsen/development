<?php namespace AP\Composers;

use Article;
use AP\Repositories\Article\ArticleInterface;

/**
 * Class ArticleComposer
 * @package AP\Composers
 * @author Phillip Madsen
 */
class ArticleComposer {

    /**
     * @var \AP\Repositories\Article\ArticleInterface
     */
    protected $article;

    /**
     * @param ArticleInterface $article
     */
    public function __construct(ArticleInterface $article) {

        $this->article = $article;
    }

    /**
     * @param $view
     */
    public function compose($view) {

        $articles = $this->article->getLastArticle(3);
        $view->with('articles', $articles);
    }
}

