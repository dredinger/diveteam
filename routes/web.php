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

Route::get('/', 'MainController@index')->name('home');
Route::get('/downloads', 'DownloadController@index')->name('downloads');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/info', 'InfoController@index')->name('info');
Route::group(['prefix' => 'info'], function () {
	Route::get('trainers', 'InfoController@trainers')->name('trainers');
	Route::get('feeding', 'InfoController@divefeed')->name('divefeed');
});
Route::get('/about', 'MainController@about')->name('about');
