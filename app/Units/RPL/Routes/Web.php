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
            $this->router->get('', ['as' => 'rpl.index', 'uses' => 'RPLController@index']);

            $this->router->get('novo', ['as' => 'rpl.create', 'uses' => 'RPLController@create']);
            $this->router->post('salvar', ['as' => 'rpl.store',  'uses' => 'RPLController@store']);

            $this->router->get('{id}/editar', ['as' => 'rpl.edit', 'uses' => 'RPLController@edit']);
            $this->router->post('{id}/salvar', ['as' => 'rpl.update',  'uses' => 'RPLController@update']);

            $this->router->get('{id}/remover', ['as' => 'rpl.destroy', 'uses' => 'RPLController@destroy']);

            $this->router->get('tratar', ['as' => 'rpl.tratamentoRPLIniciado', 'uses' => 'RPLController@tratamentoRPLIniciado']);
        });
    }
}
