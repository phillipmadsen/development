<?php namespace AP\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Frontend
        View::composer('frontend.layout.menu', 'AP\Composers\MenuComposer');
        View::composer('frontend.layout.layout', 'AP\Composers\SettingComposer');
        View::composer('frontend.layout.footer', 'AP\Composers\ArticleComposer');
        View::composer('frontend.news.sidebar', 'AP\Composers\NewsComposer');

        // Backend
        View::composer('backend/layout/layout', 'AP\Composers\Admin\MenuComposer');
    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {

    }

}