<?php namespace TIOp\Units\PAPI\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'papi'], function()
        {
            // $this->router->get('', ['as' => 'papi.index', 'uses' => 'PAPIController@index']);
        });
    }
}
