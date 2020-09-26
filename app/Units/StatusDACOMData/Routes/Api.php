<?php namespace TIOp\Units\StatusDACOMData\Routes;

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
        $this->router->get('/statusDACOM', function () {
          return 'StatusDACOM API Router';
        });
        //})->middleware('auth:api');

        $this->router->get(
            '/{server}/{value}/updateStatusDACOM',  ['as' => 'dashboard.updateStatusDACOM',
            'uses' => 'StatusDACOMDataController@updateStatus'
        ]);

        $this->router->get(
            '/{server}/{value}/updateStatusRemoteCopy',  ['as' => 'dashboard.updateStatusRemoteCopy',
            'uses' => 'StatusDACOMDataController@updateStatus'
        ]);
    }
}
