<?php namespace TIOp\Units\StatusDACOMData\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

class Web extends RouteFile
{
    /**
     * Declare Web Routes.
     */
    public function routes()
    {
        $this->router->group(['prefix' => 'statusDACOM'], function()
        {
            $this->router->get('', ['as' => 'sc.index', 'uses' => 'SistemasCentrosController@index']);
        });
    }
}
