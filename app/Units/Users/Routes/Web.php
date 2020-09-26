<?php namespace TIOp\Units\Users\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

/**
 * Web Routes.
 *
 * This file is where you may define all of the routes that are handled
 * by your application. Just tell Laravel the URIs it should respond
 * to using a Closure or controller method. Build something great!
 */
class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'users', 'middleware' => 'auth'], function()
        {
            $this->router->get('', ['as' => 'users.index', 'uses' => 'UsersController@index']);

            $this->router->get('novo', ['as' => 'users.create', 'uses' => 'UsersController@create']);
            $this->router->post('salvar', ['as' => 'users.store',  'uses' => 'UsersController@store']);

            $this->router->get('{id}/editar', ['as' => 'users.edit', 'uses' => 'UsersController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'users.update',  'uses' => 'UsersController@update']);

            $this->router->get('{id}/remover', ['as' => 'users.destroy', 'uses' => 'UsersController@destroy']);
        });
    }
}
