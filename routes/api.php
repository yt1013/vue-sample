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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function() {
    Route::get('/todo', 'TodoController@get');
    Route::post('/todo/store', 'TodoController@store');
    Route::post('/todo/edit', 'TodoController@edit');
    Route::post('/todo/delete', 'TodoController@delete');
});
