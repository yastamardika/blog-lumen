<?php

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

$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});

//show all


$router->post('content', 'ContentController@store');

$router->get('content', 'ContentController@index');
//show per id
$router->get('content/{id}', 'ContentController@show');

//change data
$router->put('content/{id}', 'ContentController@update');

//delete data
$router->delete('content/{id}', 'ContentController@destroy');