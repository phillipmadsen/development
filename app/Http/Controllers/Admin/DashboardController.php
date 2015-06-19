<?php namespace AP\Http\Controllers\Admin;

use AP\Http\Controllers\Controller;
use AP\Models\User;
use AP\Models\Logger;

/**
 * Class DashboardController
 * @package AP\Controllers\Admin
 * @author Phillip Madsen
 */
class DashboardController extends Controller {

    function index() {

        $logger = new Logger();
        /*$chartData = $logger->getLogPercent();*/

        $chartData = array();

        return view('backend/layout/dashboard', compact('chartData'))->with('active', 'home');
    }
}
