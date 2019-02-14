<?php namespace TIOp\Units\Dashboard\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\Radars\Contracts\RadarRepository;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    private $radarRepository;

    /**
     * Create a new controller instance.
     */
    public function __construct(RadarRepository $radarRepository)
    {
        //$this->middleware('auth');

        $this->radarRepository = $radarRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $radares = $this->radarRepository->listRadars()->count();

        return view('dashboard::index')->with(compact('radares'));
    }
}
