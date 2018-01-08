<?php namespace TIOp\Units\Radars\Controllers;

use Codecasts\Support\Http\Controller;

/**
 * Class HomeController.
 */
class RadarController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('radars::index');
    }
}
