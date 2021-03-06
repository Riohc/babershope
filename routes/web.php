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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('user',  ['uses' => 'UserController@showAllAuthors']);

    $router->get('user/{id}', ['uses' => 'UserController@showOneAuthor']);

    $router->delete('user/{id}', ['uses' => 'UserController@delete']);

    $router->put('user/{id}', ['uses' => 'UserController@update']);
  
    $router->get('item',  ['uses' => 'ItemController@showAllAuthors']);

    $router->get('item/{id}', ['uses' => 'ItemController@showOneAuthor']);

    $router->post('item', ['uses' => 'ItemController@create']);

    $router->delete('item/{id}', ['uses' => 'ItemController@delete']);

    $router->put('item/{id}', ['uses' => 'ItemController@update']);

    $router->get('role',  ['uses' => 'RoleController@showAllAuthors']);

    $router->get('role/{id}', ['uses' => 'RoleController@showOneAuthor']);

    $router->post('role', ['uses' => 'RoleController@create']);

    $router->delete('role/{id}', ['uses' => 'RoleController@delete']);

    $router->put('role/{id}', ['uses' => 'RoleController@update']);
    
    $router->get('transaksi',  ['uses' => 'TransaksiController@showAllAuthors']);

    $router->get('transaksi/{id}', ['uses' => 'TransaksiController@showOneAuthor']);

    $router->post('transaksi', ['uses' => 'TransaksiController@create']);

    $router->delete('transaksi/{id}', ['uses' => 'TransaksiController@delete']);

    $router->put('transaksi/{id}', ['uses' => 'TransaksiController@update']);

    $router->get('itemtransaksi',  ['uses' => 'ItemTransaksiController@showAllAuthors']);

    $router->get('itemtransaksi/{id}', ['uses' => 'ItemTransaksiController@showOneAuthor']);

    $router->post('itemtransaksi', ['uses' => 'ItemTransaksiController@create']);

    $router->delete('itemtransaksi/{id}', ['uses' => 'ItemTransaksiController@delete']);

    $router->put('itemtransaksi/{id}', ['uses' => 'ItemTransaksiController@update']);

    $router->post('register', 'AuthController@register');

    $router->post('login', 'AuthController@login');
    
    $router->get('cart',  ['uses' => 'CartController@showAllAuthors']);

    $router->get('cart/{id}', ['uses' => 'CartController@showOneAuthor']);

    $router->post('cart', ['uses' => 'CartController@create']);

    $router->delete('cart/{id}', ['uses' => 'CartController@delete']);

    $router->put('cart/{id}', ['uses' => 'CartController@update']);


});
  