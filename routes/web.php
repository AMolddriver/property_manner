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

$router->get('foo/{id}',function($id){
    return 'testGet'.$id;
});

$router->post('foo','TestController@test');

$router->get('fb/{id}','admin\TestController@test');

$router->get('actives/{id}/{user}/{ss}','admin\TestController@actives');

$router->get('actived','admin\TestController@actives');

$router->post('actives','admin\TestController@active');

$router->get('search','admin\TestController@search');