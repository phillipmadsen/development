<?php namespace AP\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LogViewerServiceProvider
 * @package AP\Providers
 * @author Phillip Madsen
 */
class LogViewerServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('logviewer', 'AP\LogViewer\LogViewer');
    }
}
