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

Route::get('/create', 'FileUploadController@create');

Route::group(['prefix' => 'trumbow'], function () {
    Route::get('/', 'TrumbowygController@index');
    Route::get('/create', 'TrumbowygController@create');
    Route::post('/store', 'TrumbowygController@store');    
});
