<?php namespace AP\Composers;

use AP\Models\Setting;
use AP\Repositories\Setting\SettingInterface;

/**
 * Class SettingComposer
 * @package AP\Composers
 * @author Phillip Madsen
 */
class SettingComposer {

    /**
     * @var \AP\Repositories\Setting\SettingInterface
     */
    protected $setting;

    /**
     * @param SettingInterface $setting
     */
    public function __construct(SettingInterface $setting) {

        $this->setting = $setting;
    }

    /**
     * @param $view
     */
    public function compose($view) {

        $settings = $this->setting->getSettings();
        $view->with('settings', $settings);
    }
}