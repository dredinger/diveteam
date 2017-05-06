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

Route::get('/downloads/{id}/{method?}', 'DownloadController@getFile');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/volunteer', 'ContactController@volunteer')->name('volunteer');

Route::get('/info', 'InfoController@index')->name('info');

Route::group(['prefix' => 'info'], function () {
	Route::get('trainers', 'InfoController@trainer')->name('trainers');
	Route::get('feeds', 'InfoController@feeds')->name('feeds');
});

Auth::routes();

Route::get('/logout', function () {
	auth()->logout();
	return redirect('/');
});

Route::any('{query}', function () {
	return redirect('/');
})->where('query', '.*');

Route::get('/404', 'MainController@missing')->name('missing');
