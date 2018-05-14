<?php namespace TIOp\Units\BDS\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'bds'], function()
        {
            $this->router->get('', ['as' => 'bds.index', 'uses' => 'BDSController@index']);

            $this->router->get('novo', ['as' => 'bds.create', 'uses' => 'BDSController@create']);
            $this->router->post('salvar', ['as' => 'bds.store',  'uses' => 'BDSController@store']);

            $this->router->get('{id}/editar', ['as' => 'bds.edit', 'uses' => 'BDSController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'bds.update',  'uses' => 'BDSController@update']);

            $this->router->get('{id}/remover', ['as' => 'bds.destroy', 'uses' => 'BDSController@destroy']);
        });
    }
}
