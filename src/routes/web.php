<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\PessoasController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('pessoas', 'PessoasController@index');
    $router->get('pessoas/{id}', 'PessoasController@show');
    $router->post('pessoas', 'PessoasController@create');
    $router->put('pessoas/{id}', 'PessoasController@update');
    $router->delete('pessoas/{id}', 'PessoasController@delete');
});
