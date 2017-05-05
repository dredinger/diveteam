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

Route::group(['prefix' => 'downloads'], function () {
	Route::get('/{id}/download', 'DownloadController@fileDownload');
	Route::get('/{id}/view', 'DownloadController@fileView');
});

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/info', 'InfoController@index')->name('info');

Route::group(['prefix' => 'info'], function () {
	Route::get('trainers', 'InfoController@trainer')->name('trainers');
	Route::get('feeds', 'InfoController@feeds')->name('feeds');
});

Route::get('/about', 'MainController@about')->name('about');

Auth::routes();

Route::get('/logout', function () {
	if (auth()->logout()) {
		return redirect()->home();
	}
});
