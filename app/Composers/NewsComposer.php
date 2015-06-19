<?php namespace AP\Composers;

use News;
use AP\Repositories\News\NewsInterface;

/**
 * Class MenuComposer
 * @package AP\Composers
 * @author Phillip Madsen
 */
class NewsComposer {

    /**
     * @var \AP\Repositories\News\NewsInterface
     */
    protected $news;

    /**
     * @param ArticleInterface $article
     */
    public function __construct(NewsInterface $news) {

        $this->news = $news;
    }

    /**
     * @param $view
     */
    public function compose($view) {

        $news = $this->news->getLastNews(5);
        $view->with('news', $news);
    }
}

