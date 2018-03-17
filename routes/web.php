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

Route::domain('localhost')->group(function () {
	Route::get('/', 'MainController@index')->name('home');

	Route::get('/downloads', 'DownloadsController@index')->name('downloads');

	Route::get('/downloads/{id}/{method?}', 'DownloadsController@getFile');

	Route::get('/contact', 'ContactController@index')->name('contact');

	Route::group(['prefix' => 'volunteer'], function () {
		Route::get('', 'VolunteerController@index')->name('volunteer');
		Route::get('assistant', 'VolunteerController@assistant')->name('volunteer.assistant');
		Route::get('guide', 'VolunteerController@guide')->name('volunteer.guide');
		Route::get('diver', 'VolunteerController@diver')->name('volunteer.diver');
		// Route::get('contact', 'VolunteerController@contact')->name('volunteer.contact');
		// Route::post('contact', 'VolunteerController@store');
	});

	Route::group(['prefix' => 'info'], function () {
		Route::get('', 'InfoController@index')->name('info');
		Route::get('trainers', 'InfoController@trainer')->name('trainers');
		Route::get('feeds', 'InfoController@feeds')->name('feeds');
	});

	Route::get('login', 'Auth\SessionsController@create')->name('login');
	Route::post('login', 'Auth\SessionsController@store');
	// Route::get('logout', 'Auth\SessionsController@destroy')->name('logout');

	Route::post('logout', function () {
		auth()->logout();
		session()->flash('message', 'You are logged out!');
		return redirect(route('home'));
	})->name('logout');
});

Route::domain('dso.localhost')->group(function () {
	Route::name('dso.')->group(function () {
		Route::get('/', 'DsoController@index')->name('home');
		Route::get('/logs', 'LogsController@index')->name('logs');
		Route::get('/logs/add', 'LogsController@create')->name('logs.add');
		Route::get('/notes', 'NotesController@index')->name('notes');
		Route::get('/notes/add', 'NotesController@create')->name('notes.add');
	});
	
	Route::post('/logs/add', 'LogsController@store');
	Route::post('/notes/add', 'NotesController@store');
});