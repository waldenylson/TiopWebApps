<?php namespace TIOp\Units\Centros\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'centros'], function(){
            $this->router->get('', ['as' => 'centros.index', 'uses' => 'CentrosController@index']);

            $this->router->get('novo', ['as' => 'centros.create', 'uses' => 'CentrosController@create']);
            $this->router->post('salvar', ['as' => 'centros.store',  'uses' => 'CentrosController@store']);

            $this->router->get('{id}/editar', ['as' => 'centros.edit', 'uses' => 'CentrosController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'centros.update',  'uses' => 'CentrosController@update']);

            $this->router->get('{id}/remover', ['as' => 'centros.destroy', 'uses' => 'CentrosController@destroy']);
        });
    }
}
