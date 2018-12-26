<?php namespace TIOp\Units\MntProgramadas\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'mnt'], function(){
            $this->router->get('', ['as' => 'mntProg.index', 'uses' => 'MntProgramadasController@index']);

            $this->router->get('novo', ['as' => 'mntProg.create', 'uses' => 'MntProgramadasController@create']);
            $this->router->post('salvar', ['as' => 'mntProg.store',  'uses' => 'MntProgramadasController@store']);

            $this->router->get('{id}/editar', ['as' => 'mntProg.edit', 'uses' => 'MntProgramadasController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'mntProg.update',  'uses' => 'MntProgramadasController@update']);

            $this->router->get('{id}/remover', ['as' => 'mntProg.destroy', 'uses' => 'MntProgramadasController@destroy']);
        });
    }
}
