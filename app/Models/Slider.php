<?php namespace AP\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Slider
 * @author Phillip Madsen
 */
class Slider extends Model {

    public $table = 'sliders';

    public function images() {

        return $this->morphMany('AP\Models\Photo', 'relationship', 'type');
    }
}
