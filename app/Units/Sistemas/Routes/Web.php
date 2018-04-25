<?php namespace TIOp\Units\Sistemas\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'sistemas'], function(){
            $this->router->get('', ['as' => 'sistemas.index', 'uses' => 'SistemasController@index']);
        });
    }
}
