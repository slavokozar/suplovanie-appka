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
Route::get('/nastenka', 'PublicController@index');

Route::get('/file/{filename?}', 'FileController@show');

Route::get('/', 'HomeController@index')->name('home');

Route::post('/upload', 'UploadController@store');

Auth::routes();

