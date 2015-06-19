<?php namespace AP\Providers;

use Illuminate\Support\ServiceProvider;
use AP\Feeder\Feeder;

/**
 * Class FeederServiceProvider
 * @package AP\Providers
 * @author Phillip Madsen
 */
class FeederServiceProvider extends ServiceProvider {

    /**
     * Register
     */
    public function register() {

        $this->app->bind('feeder', 'AP\Feeder\Feeder');
    }
}
