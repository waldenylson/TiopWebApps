<?php namespace TIOp\Units\Radars\Routes;

use Codecasts\Support\Http\Routing\RouteFile;

/**
 * Api Routes.
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 */
class Api extends RouteFile
{
    /**
     * Declare API Routes.
     */
    public function routes()
    {
        $this->router->get('/radars', function () {
          return 'Radars API Router';
        });
        //})->middleware('auth:api');

        $this->router->get('/{sic}/{porta}/{status}/statusupdate', ['as' => 'radars.statusupdate',  'uses' => 'StatusRadarController@updateStatus']);
    }
}
