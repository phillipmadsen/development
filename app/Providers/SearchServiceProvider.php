<?php namespace AP\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class SearchServiceProvider
 * @package AP\Providers
 * @author Phillip Madsen
 */
class SearchServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('search', 'AP\Search\Search');
    }
}
