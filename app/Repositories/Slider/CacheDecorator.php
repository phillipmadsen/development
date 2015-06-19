<?php namespace AP\Repositories\Slider;

use AP\Services\Cache\CacheInterface;
use AP\Repositories\Slider\AbstractSliderDecorator;

/**
 * Class CacheDecorator
 * @package AP\Repositories\Slider
 * @author Phillip Madsen
 */
class CacheDecorator extends AbstractSliderDecorator {

    /**
     * @var \AP\Services\Cache\CacheInterface
     */
    protected $cache;

    /**
     * Cache key
     * @var string
     */
    protected $cacheKey = "slider";

    /**
     * @param SliderInterface $slider
     * @param CacheInterface $cache
     */
    public function __construct(SliderInterface $slider, CacheInterface $cache) {

        parent::__construct($slider);
        $this->cache = $cache;
    }

    /**
     * @return mixed
     */
    public function all() {

        $key = md5(getLang() . $this->cacheKey . 'all.sliders');

        if ($this->cache->has($key)) {
            return $this->cache->get($key);
        }

        $sliders = $this->slider->all();

        $this->cache->put($key, $sliders);

        return $sliders;
    }
}