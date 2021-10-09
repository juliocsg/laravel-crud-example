<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function() {
    Route::post('user/insert', ['as' => 'user.inser', 'uses' => 'UserController@store']);
    Route::put('user/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);
    Route::delete('user/{id}/delete', ['as' => 'user.delete', 'uses' => 'UserController@delete']);
    Route::get('user/{id}/get', ['as' => 'user.get', 'uses' => 'UserController@getUserById']);
    Route::get('user/list', ['as' => 'user.list', 'uses' => 'User\UserController@getAll']);
});
