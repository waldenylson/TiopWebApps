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

            $this->router->get('novo', ['as' => 'sistemas.create', 'uses' => 'SistemasController@create']);
            $this->router->post('salvar', ['as' => 'sistemas.store',  'uses' => 'SistemasController@store']);

            $this->router->get('{id}/editar', ['as' => 'sistemas.edit', 'uses' => 'SistemasController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'sistemas.update',  'uses' => 'SistemasController@update']);

            $this->router->get('{id}/remover', ['as' => 'sistemas.destroy', 'uses' => 'SistemasController@destroy']);
        });
    }
}
