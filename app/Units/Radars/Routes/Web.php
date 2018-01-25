<?php namespace TIOp\Units\Radars\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'radares'], function(){
            $this->router->get('', ['as' => 'radars.index', 'uses' => 'RadarController@index']);
            $this->router->get('novo', ['as' => 'radars.create', 'uses' => 'RadarController@create']);
            $this->router->post('salvar', ['as' => 'radars.store',  'uses' => 'RadarController@store']);
        });
    }
}
