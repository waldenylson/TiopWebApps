<?php namespace TIOp\Units\Dashboard\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'dashboard'], function(){
            $this->router->get('',           ['as' => 'dashboard.index',     'uses' => 'DashboardController@index']);
            $this->router->get('/sinoptico', ['as' => 'dashboard.sinoptico', 'uses' => 'SinopticoController@index']);
        });
    }
}
