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
    return 'hello';
});

$router->get('/bd-test', 'ExampleController@checkDb');


$router->get('/house', function () use ($router) {
    return 'FUCK YEAH';
});
