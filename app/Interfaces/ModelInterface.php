<?php namespace AP\Interfaces;

/**
 * Class ModelInterface
 * @package AP\Interfaces
 * @author Phillip Madsen
 */
interface ModelInterface {

    /**
     * @param $value
     * @return mixed
     */
    public function setUrlAttribute($value);

    /**
     * @return mixed
     */
    public function getUrlAttribute();
}