<?php namespace AP\Composers\Admin;

use AP\Models\FormPost;

/**
 * Class MenuComposer
 * @package AP\Composers\Admin
 * @author Phillip Madsen
 */
class MenuComposer {

    /**
     * @param $view
     */
    public function compose($view) {

        $view->with('formPost', FormPost::where('is_answered', 0)->get());
    }
}

