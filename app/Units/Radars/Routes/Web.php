<?php namespace TIOp\Units\Home\Routes;

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

        // $this->router->get('/radars',             ['as' => 'radars.index',   'uses' => 'RadarController@index']);
        // $this->router->get('radars/new',          ['as' => 'radars.create',  'uses' => 'RadarController@create']);
        // $this->router->post('radars/save',        ['as' => 'radars.store',   'uses' => 'RadarController@store']);
        // $this->router->get('radars/{id}/edit',    ['as' => 'radars.edit',    'uses' => 'RadarController@edit']);
        // $this->router->post('radars/{id}/update', ['as' => 'radars.update',  'uses' => 'RadarController@update']);
        // $this->router->get('radars/{id}/remove',  ['as' => 'radars.destroy', 'uses' => 'RadarController@destroy']);

        $this->router->get('/home', ['as' => 'home.index', 'uses' => 'HomeController@index']);

//        $this->router->get('/home', function(){
//            return 'Home Route';
//        });
    }
}
