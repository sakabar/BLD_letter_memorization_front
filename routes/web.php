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

// Route::get('/index', ['as' => 'front.index', 'uses' => 'FrontController@index']);
Route::get('/', ['as' => 'front.index', 'uses' => 'FrontController@index']);
