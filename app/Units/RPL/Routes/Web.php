<?php namespace TIOp\Units\RPL\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'rpl'], function()
        {
            $this->router->get('', ['as' => 'rpl.index', 'uses' => 'UsersController@index']);

            $this->router->get('novo', ['as' => 'rpl.create', 'uses' => 'UsersController@create']);
            $this->router->post('salvar', ['as' => 'rpl.store',  'uses' => 'UsersController@store']);

            $this->router->get('{id}/editar', ['as' => 'rpl.edit', 'uses' => 'UsersController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'rpl.update',  'uses' => 'UsersController@update']);

            $this->router->get('{id}/remover', ['as' => 'rpl.destroy', 'uses' => 'UsersController@destroy']);
        });
    }
}
