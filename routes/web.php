<?php

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

Route::get('/', function () {
    return view('welcome');
});

$namespacePrefix = '\\'.config('voyager.controllers.namespace').'\\';

Route::get('login', ['uses' => $namespacePrefix.'VoyagerAuthController@login',     'as' => 'voyager.login']);
Route::post('login', ['uses' => $namespacePrefix.'VoyagerAuthController@postLogin', 'as' => 'voyager.postlogin']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

