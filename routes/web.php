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
Route::domain(env('APP_URL', 'deepblueseafoundation.org'))->group(function () {
	Route::get('/', 'MainController@index')->name('home');

	Route::get('/downloads', 'DownloadsController@index')->name('downloads');

	Route::get('/downloads/{id}/{method?}', 'DownloadsController@getFile');

	Route::get('/contact', 'ContactController@index')->name('contact');

	Route::group(['prefix' => 'volunteer', 'as' => 'volunteer.'], function () {
		Route::get('/', 'VolunteerController@index')->name('home');
		Route::get('assistant', 'VolunteerController@assistant')->name('assistant');
		Route::get('guide', 'VolunteerController@guide')->name('guide');
		Route::get('diver', 'VolunteerController@diver')->name('diver');
		// Route::get('contact', 'VolunteerController@contact')->name('contact');
		// Route::post('contact', 'VolunteerController@store');
	});

	Route::group(['prefix' => 'info', 'as' => 'info.'], function () {
		Route::get('/', 'InfoController@index')->name('home');
		Route::get('trainers', 'InfoController@trainer')->name('trainers');
		Route::get('feeds', 'InfoController@feeds')->name('feeds');
	});

	// Auth::routes();

	Route::get('login', 'Auth\SessionsController@create')->name('login');
	Route::post('login', 'Auth\SessionsController@store');
	// Route::post('logout', 'Auth\SessionsController@destroy')->name('logout');

	Route::post('logout', function () {
		auth()->logout();
		session()->flash('message', 'You are logged out!');
		return redirect(route('home'));
	})->name('logout');
});

Route::domain(env('DSO_URL', 'dso.deepblueseafoundation.org'))->group(function () {

	Route::name('dso.')->group(function () {
		Route::get('/', 'DsoController@index')->name('home');
		Route::get('/search', 'DsoController@search')->name('search');
		Route::get('/logs', 'LogsController@index')->name('logs');
		Route::get('/logs/{id}', 'LogsController@show')->name('logs.view');
		Route::get('/logs/edit/{id}', 'LogsController@edit')->name('logs.edit');
		Route::put('/logs/{id}', 'LogsController@update')->name('logs.update');
		Route::get('/logs/create', 'LogsController@create')->name('logs.create');
		Route::get('/notes', 'NotesController@index')->name('notes');
		Route::get('/notes/{id}', 'NotesController@show')->name('notes.view');
		Route::get('/notes/create', 'NotesController@create')->name('notes.create');
	});
	
	Route::post('/search', 'DsoController@search');
	Route::post('/logs/create', 'LogsController@store');
	Route::post('/notes/create', 'NotesController@store');

});