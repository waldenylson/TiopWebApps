<?php namespace TIOp\Units\Radars\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->get('/radars', ['as' => 'radars.index', 'uses' => 'RadarController@index']);
    }
}
