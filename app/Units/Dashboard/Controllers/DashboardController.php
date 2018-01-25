<?php namespace TIOp\Units\Dashboard\Controllers;

use Codecasts\Support\Http\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
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
        return view('dashboard::index');
    }
}
