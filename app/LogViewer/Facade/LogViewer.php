<?php namespace AP\LogViewer\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class LogViewer
 * @package AP\Facades
 * @author Phillip Madsen
 */
class LogViewer extends Facade {

    protected static function getFacadeAccessor() {

        return 'logviewer';
    }
}
