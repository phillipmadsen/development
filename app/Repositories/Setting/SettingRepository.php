<?php namespace AP\Repositories\Setting;

use AP\Models\Setting;
use AP\Exceptions\Validation\ValidationException;
use AP\Repositories\AbstractValidator as Validator;

/**
 * Class SettingRepository
 * @package AP\Repositories\Setting
 * @author Phillip Madsen
 */
class SettingRepository extends Validator implements SettingInterface {

    /**
     * @var \Setting
     */
    protected $setting;

    /**
     * @param Setting $setting
     */
    public function __construct(Setting $setting) {

        $this->setting = $setting;
    }

    /**
     * @return array
     */
    public function getSettings() {

        $obj = ($this->setting->where('lang', getLang())->first()) ?: $this->setting;

        $jsonData = $obj->settings;
        $setting = json_decode($jsonData, true);

        if ($setting === null)
            $setting = array(
                'site_title'       => null,
                'ga_code'          => null,
                'meta_keywords'    => null,
                'meta_description' => null
            );

        return $setting;
    }
}
