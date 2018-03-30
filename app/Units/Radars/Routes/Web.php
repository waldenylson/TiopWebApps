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
            $this->router->get('', ['as' => 'radars.index', 'uses' => 'SinopticoController@index']);

            $this->router->get('novo', ['as' => 'radars.create', 'uses' => 'SinopticoController@create']);
            $this->router->post('salvar', ['as' => 'radars.store',  'uses' => 'SinopticoController@store']);

            $this->router->get('{id}/editar', ['as' => 'radars.edit', 'uses' => 'SinopticoController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'radars.update',  'uses' => 'SinopticoController@update']);

            $this->router->get('{id}/remover', ['as' => 'radars.destroy', 'uses' => 'SinopticoController@destroy']);
        });
    }
}
