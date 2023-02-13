<?php namespace TIOp\Units\Dashboard\Routes;

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
	    $this->router->get('/dashboard', function () {
          return 'Dashboard API Router';
        });
        //})->middleware('auth:api');

        $this->router->get('/getRStatus',  ['as' => 'dashboard.getRStatus',
          'uses' => 'SinopticoController@getRadarsStatus'])->middleware('cors');

        $this->router->get('/getEfetivo',  ['as' => 'dashboard.getEfetivo',
          'uses' => 'SinopticoController@getEfetivoTiop'])->middleware('cors');

        $this->router->get('/getInfSis',   ['as' => 'dashboard.getInfSis',
          'uses' => 'SinopticoController@getInfSistemasData'])->middleware('cors');

        $this->router->get('/getRPLInfo',  ['as' => 'dashboard.getRPLInfo',
          'uses' => 'SinopticoController@getRPLInfo'])->middleware('cors');

        $this->router->get('/getSobreaviso',  ['as' => 'dashboard.getSobreaviso',
          'uses' => 'SinopticoController@getSobreaviso'])->middleware('cors');

        $this->router->get('/getMntProg',  ['as' => 'dashboard.getMntProg',
          'uses' => 'SinopticoController@getMntProg'])->middleware('cors');

        $this->router->get('/getStatusDACOM',  ['as' => 'dashboard.getStatusDACOM',
          'uses' => 'SinopticoController@getStatusDACOM'])->middleware('cors');
    }
}
