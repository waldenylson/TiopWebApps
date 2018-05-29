<?php namespace TIOp\Units\SistemasCentros\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'sc'], function(){
            $this->router->get('', ['as' => 'sc.index', 'uses' => 'SistemasCentrosController@index']);

            $this->router->get('novo', ['as' => 'sc.create', 'uses' => 'SistemasCentrosController@create']);
            $this->router->post('salvar', ['as' => 'sc.store',  'uses' => 'SistemasCentrosController@store']);

            $this->router->get('{id}/editar', ['as' => 'sc.edit', 'uses' => 'SistemasCentrosController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'sc.update',  'uses' => 'SistemasCentrosController@update']);

            $this->router->get('{id}/remover', ['as' => 'sc.destroy', 'uses' => 'SistemasCentrosController@destroy']);
        });
    }
}
