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

Route::group(['prefix' => 'v1'], function () {

    /*
     * ====================== Post  ======================
    */
    Route::namespace('Api\Post')->prefix('/post')->group(function () {

            Route::get('list', 'PostController@list');
            Route::post('create', 'PostController@store');


    });

});
