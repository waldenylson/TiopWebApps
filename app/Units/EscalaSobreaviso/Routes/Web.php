<?php namespace TIOp\Units\EscalaSobreaviso\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'sobreaviso'], function(){
            $this->router->get('', ['as' => 'sobreaviso.index', 'uses' => 'EscalaSobreavisoController@index']);

            $this->router->get('{id}/novo', ['as' => 'sobreaviso.create', 'uses' => 'EscalaSobreavisoController@create']);
            $this->router->post('salvar', ['as' => 'sobreaviso.store',  'uses' => 'EscalaSobreavisoController@store']);

            $this->router->get('{id}/editar', ['as' => 'sobreaviso.edit', 'uses' => 'EscalaSobreavisoController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'sobreaviso.update',  'uses' => 'EscalaSobreavisoController@update']);

            $this->router->get('{id}/remover', ['as' => 'sobreaviso.destroy', 'uses' => 'EscalaSobreavisoController@destroy']);
        });
    }
}
