<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'base'], function(){

    Route::get('/', function(){
        return response()->json(["status" => "Online"]);
    });
    
    Route::get('/users', "UserController@index");
    Route::post('auth/login', 'AuthController@login');

    Route::group(['middleware' => ['apiJwt']], function(){

        Route::resource("user", "UserController");
        Route::post('auth/logout', 'AuthController@logout');

    });
});