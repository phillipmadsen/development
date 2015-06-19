<?php namespace AP\Search\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class Search
 * @package AP\Facades
 * @author Phillip Madsen
 */
class Search extends Facade {

    protected static function getFacadeAccessor() {

        return 'search';
    }
}
