<?php namespace AP\Search;

use AP\Models\News;
use AP\Models\Article;
use AP\Models\PhotoGallery;

/**
 * Class Search
 * @package AP\Search
 * @author Phillip Madsen
 */
class Search {

    public function search($search) {

        $newsResult = News::search($search)->get()->toArray();
        $articleResult = Article::search($search)->get()->toArray();
        $photoGalleryResult = PhotoGallery::search($search)->get()->toArray();
        $result = array_merge($newsResult, $articleResult, $photoGalleryResult);
        return $result;
    }
}
