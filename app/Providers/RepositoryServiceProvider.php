<?php namespace AP\Providers;

use Illuminate\Support\ServiceProvider;

use AP\Models\Article;
use AP\Models\Category;
use AP\Models\Page;
use AP\Models\Faq;
use AP\Models\News;
Use AP\Models\PhotoGallery;
use AP\Models\Project;
use AP\Models\Tag;
use AP\Models\Video;
use AP\Models\Menu;
use AP\Models\Slider;
use AP\Models\Setting;

use AP\Repositories\Article\ArticleRepository;
use AP\Repositories\Article\CacheDecorator as ArticleCacheDecorator;

use AP\Repositories\Category\CategoryRepository;
use AP\Repositories\Category\CacheDecorator as CategoryCacheDecorator;

use AP\Repositories\Page\PageRepository;
use AP\Repositories\Page\CacheDecorator as PageCacheDecorator;

use AP\Repositories\Faq\FaqRepository;
use AP\Repositories\Faq\CacheDecorator as FaqCacheDecorator;

use AP\Repositories\News\NewsRepository;
use AP\Repositories\News\CacheDecorator as NewsCacheDecorator;

use AP\Repositories\PhotoGallery\PhotoGalleryRepository;
use AP\Repositories\PhotoGallery\CacheDecorator as PhotoGalleryCacheDecorator;

use AP\Repositories\Project\ProjectRepository;
use AP\Repositories\Project\CacheDecorator as ProjectCacheDecorator;

use AP\Repositories\Tag\TagRepository;
use AP\Repositories\Tag\CacheDecorator as TagCacheDecorator;

use AP\Repositories\Video\VideoRepository;
use AP\Repositories\Video\CacheDecorator as VideoCacheDecorator;

use AP\Repositories\Menu\MenuRepository;
use AP\Repositories\Menu\CacheDecorator as MenuCacheDecorator;

use AP\Repositories\Slider\SliderRepository;
use AP\Repositories\Slider\CacheDecorator as SliderCacheDecorator;

use AP\Repositories\Setting\SettingRepository;
use AP\Repositories\Setting\CacheDecorator as SettingCacheDecorator;

use AP\Services\Cache\ApCache;

/**
 * Class RepositoryServiceProvider
 * @package AP\Repositories
 * @author Phillip Madsen
 */
class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        $app = $this->app;

        //dd($app['config']->get('ap.cache'));

        // article
        $app->bind('AP\Repositories\Article\ArticleInterface', function ($app) {

            $article = new ArticleRepository(
                new Article
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $article = new ArticleCacheDecorator(
                    $article,
                    new ApCache($app['cache'], 'articles')
                );
            }

            return $article;
        });

        // category
        $app->bind('AP\Repositories\Category\CategoryInterface', function ($app) {

            $category = new CategoryRepository(
                new Category
            );


            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $category = new CategoryCacheDecorator(
                    $category,
                    new ApCache($app['cache'], 'categories')
                );
            }

            return $category;
        });


        // page
        $app->bind('AP\Repositories\Page\PageInterface', function ($app) {

            $page = new PageRepository(
                new Page
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $page = new PageCacheDecorator(
                    $page,
                    new ApCache($app['cache'], 'pages')
                );
            }

            return $page;
        });


        // faq
        $app->bind('AP\Repositories\Faq\FaqInterface', function ($app) {

            $faq = new FaqRepository(
                new Faq
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $faq = new FaqCacheDecorator(
                    $faq,
                    new ApCache($app['cache'], 'faqs')
                );
            }

            return $faq;
        });


        // news
        $app->bind('AP\Repositories\News\NewsInterface', function ($app) {

            $news = new NewsRepository(
                new News
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $news = new NewsCacheDecorator(
                    $news,
                    new ApCache($app['cache'], 'pages')
                );
            }

            return $news;
        });

        // photo gallery
        $app->bind('AP\Repositories\PhotoGallery\PhotoGalleryInterface', function ($app) {

            $photoGallery = new PhotoGalleryRepository(
                new PhotoGallery
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $photoGallery = new PhotoGalleryCacheDecorator(
                    $photoGallery,
                    new ApCache($app['cache'], 'photo_galleries')
                );
            }

            return $photoGallery;
        });


        // project
        $app->bind('AP\Repositories\Project\ProjectInterface', function ($app) {

            $project = new ProjectRepository(
                new Project
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $project = new ProjectCacheDecorator(
                    $project,
                    new ApCache($app['cache'], 'projects')
                );
            }

            return $project;
        });

        // tag
        $app->bind('AP\Repositories\Tag\TagInterface', function ($app) {

            $tag = new TagRepository(
                new Tag
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $tag = new TagCacheDecorator(
                    $tag,
                    new ApCache($app['cache'], 'tags')
                );
            }

            return $tag;
        });

        // video
        $app->bind('AP\Repositories\Video\VideoInterface', function ($app) {

            $video = new VideoRepository(
                new Video
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $video = new VideoCacheDecorator(
                    $video,
                    new ApCache($app['cache'], 'pages')
                );
            }

            return $video;
        });

        // menu
        $app->bind('AP\Repositories\Menu\MenuInterface', function ($app) {

            $menu = new MenuRepository(
                new Menu
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $menu = new MenuCacheDecorator(
                    $menu,
                    new ApCache($app['cache'], 'menus')
                );
            }

            return $menu;
        });

        // slider
        $app->bind('AP\Repositories\Slider\SliderInterface', function ($app) {

            $slider = new SliderRepository(
                new Slider
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $slider = new SliderCacheDecorator(
                    $slider,
                    new ApCache($app['cache'], 'sliders')
                );
            }

            return $slider;
        });

        // setting
        $app->bind('AP\Repositories\Setting\SettingInterface', function ($app) {

            $setting = new SettingRepository(
                new Setting
            );

            if ($app['config']->get('ap.cache') === true && $app['config']->get('is_admin', false) == false) {

                $setting = new SettingCacheDecorator(
                    $setting,
                    new ApCache($app['cache'], 'settings')
                );
            }

            return $setting;
        });
    }
}