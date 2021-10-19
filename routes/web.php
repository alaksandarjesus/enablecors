<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', 'HomeController@index');

$router->group(['prefix' => 'query', 'middleware' => 'throttle:global'], function () use ($router) {
    $router->get('', 'QueryController@index');
    $router->post('', 'QueryController@index');
    $router->put('', 'QueryController@index');
    $router->delete('', 'QueryController@index');
});

$router->group(['prefix' => 'test', 'middleware' => 'throttle:global'], function () use ($router) {
    $router->get('', 'TestController@index');
    $router->post('', 'TestController@index');
    $router->put('', 'TestController@index');
    $router->delete('', 'TestController@index');
});

$router->group(['prefix' => 'mock', 'middleware' => 'throttle:global'], function () use ($router) {
    $router->get('', 'MockController@index');
    $router->post('', 'MockController@index');
    $router->put('', 'MockController@index');
    $router->delete('', 'MockController@index');
});

$router->group(['prefix' => 'documentation'], function () use ($router) {

    $router->get('', 'DocumentationController@introduction');
    $router->get('installation', 'DocumentationController@installation');
    $router->get('query', 'DocumentationController@query');
    $router->get('mock', 'DocumentationController@mock');
    $router->get('ratelimiter', 'DocumentationController@ratelimiter');
    $router->get('references', 'DocumentationController@references');
});

// $router->get('/key', function() {
//     return \Illuminate\Support\Str::random(32);
// });
