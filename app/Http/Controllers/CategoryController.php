<?php namespace AP\Http\Controllers;

use AP\Repositories\Article\ArticleRepository as Article;
use AP\Repositories\Category\CategoryRepository as Category;
use AP\Repositories\Tag\TagRepository as Tag;
use AP\Repositories\Category\CategoryInterface;
use AP\Repositories\Article\ArticleInterface;
use AP\Repositories\Tag\TagInterface;
use Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

/**
 * Class CategoryController
 * @author Phillip Madsen
 */
class CategoryController extends Controller {

    protected $article;
    protected $tag;
    protected $category;

    public function __construct(ArticleInterface $article, TagInterface $tag, CategoryInterface $category) {

        $this->article = $article;
        $this->tag = $tag;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource by slug.
     * @param $slug
     * @return mixed
     */
    public function index($slug) {

        $articles = $this->category->getArticlesBySlug($slug);
        $tags = $this->tag->all();
        //$categories = $this->category->all();

        $page = Input::get('page', 1);
        $perPage = 10;
        $pagiData = $this->category->paginate($page, $perPage, false);

        $categories = new LengthAwarePaginator($pagiData->items, $pagiData->totalItems, $perPage, [
            'path' => Paginator::resolveCurrentPath()
        ]);

        $categories->setPath("");


        return view('frontend.category.index', compact('articles', 'tags', 'categories'));
    }
}
