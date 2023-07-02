<?php namespace TIOp\Units\PAPI\Routes;

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
        $this->router->get('/papi', function () {
          return 'PAPI API Router';
        });
        //})->middleware('auth:api');
//        $this->router->get(
//            '/{value}/managePAPIStatusData',  ['as' => 'papi.manageStatusCGNA',
//            'uses' => 'PAPIController@managePAPIStatusData'
//        ]);
        $this->router->post(
            '/managePAPIStatusData',  ['as' => 'papi.manageStatusCGNA',
            'uses' => 'PAPIController@managePAPIStatusData'
        ]);

        $this->router->get('/getPAPIInfo',  ['as' => 'papi.getPAPIInfo',
            'uses' => 'PAPIController@getPAPIInfo'])->middleware('cors');
    }
}
