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
// unsecure routes
$router->group(['prefix' => 'api'], function () use ($router) {
   //========================= SETUP CODE ===============================//
   // $router->get('/users',['uses' => 'UserController@getUsers']);
    
    // =================LOGIN AND CRUD CODE ==============================//
    $router->get('/login', ['uses' => 'UserController@login']);
    $router->post('/validation', ['uses' => 'UserController@validation']); 
    $router->get('/users', ['uses' => 'UserController@show']);
    $router->post('/users', ['uses' => 'UserController@addUser']);  //ADDS USER
    $router->get('/users/{id}', 'UserController@index');   //FIND THE INPUT ID
    $router->put('/users/{id}', 'UserController@updateUser');   //UPDATE
    $router->patch('/users/{id}', 'UserController@updateUser');   //update user
    $router->delete('/users/{id}', 'UserController@removeUser');  //DELETES USER
});




