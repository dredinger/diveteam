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

Route::get('/downloads', 'DownloadsController@index')->name('downloads');

Route::get('/downloads/{id}/{method?}', 'DownloadsController@getFile');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/volunteer', 'VolunteerController@index')->name('volunteer');

Route::group(['prefix' => 'volunteer'], function () {
	Route::get('assistant', 'VolunteerController@assistant');
	Route::get('guide', 'VolunteerController@guide');
	Route::get('diver', 'VolunteerController@diver');
});

Route::get('/info', 'InfoController@index')->name('info');

Route::group(['prefix' => 'info'], function () {
	Route::get('trainers', 'InfoController@trainer')->name('trainers');
	Route::get('feeds', 'InfoController@feeds')->name('feeds');
});

Route::domain('dso.deepblueseafoundation.org')->group(function () {
	Route::get('/', 'DsoController@index');
	Route::get('/logs', 'LogsController@index');
	Route::get('/logs/add', 'LogsController@create');
	Route::get('/notes', 'NotesController@index');
	Route::get('/notes/add', 'NotesController@create');

	Route::post('/logs/add', 'LogsController@store');
	Route::post('/notes/add', 'NotesController@store');
});

Route::get('login', 'Auth\SessionsController@create')->name('login');
Route::post('login', 'Auth\SessionsController@store');
// Route::get('logout', 'Auth\SessionsController@destroy')->name('logout');

Route::get('logout', function () {
	auth()->logout();
	session()->flash('message', 'You are logged out!');
	return redirect('/');
});