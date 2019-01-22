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
            $this->router->get('', ['as' => 'EscalaSobreaviso.index', 'uses' => 'EscalaSobreavisoController@index']);

            $this->router->get('novo', ['as' => 'EscalaSobreaviso.create', 'uses' => 'EscalaSobreavisoController@create']);
            $this->router->post('salvar', ['as' => 'EscalaSobreaviso.store',  'uses' => 'EscalaSobreavisoController@store']);

            $this->router->get('{id}/editar', ['as' => 'EscalaSobreaviso.edit', 'uses' => 'EscalaSobreavisoController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'EscalaSobreaviso.update',  'uses' => 'EscalaSobreavisoController@update']);

            $this->router->get('{id}/remover', ['as' => 'EscalaSobreaviso.destroy', 'uses' => 'EscalaSobreavisoController@destroy']);
        });
    }
}
