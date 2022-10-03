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

Auth::routes();

Route::get('/media', 'MediaController@index')->name('media.index');
Route::get('/media/{id}/comments', 'MediaController@index')->name('media.show');
Route::get('/home', 'HomeController@index')->name('home');
