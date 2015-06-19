<?php namespace AP\Feeder\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class Feeder
 * @package AP\Facades
 * @author Phillip Madsen
 */
class Feeder extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor() {

        return 'feeder';
    }
}
