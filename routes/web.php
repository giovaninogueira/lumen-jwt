<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'api'], function ($router) {
    Route::post('login', 'Auth\AuthController@login');
    Route::post('logout', 'Auth\AuthController@logout');

    // ROUTES WITH AUTH
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('me', 'UserController@me');
        Route::get('users', 'UserController@getUsers');
        Route::post('refresh', 'Auth\AuthController@refresh');
    });
});
