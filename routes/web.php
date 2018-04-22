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

Auth::routes();

Route::get('test', 'VoteController@test');

Route::get('/', 'VoteController@index')->name('vote.get');
Route::get('game/{id?}', 'VoteController@index')->name('vote.get.game');
Route::post('vote/{id}', 'VoteController@store')->name('vote.post');

Route::group(['middleware' => ['web', 'auth']], function () {
	Route::get('trending', 'ClipController@trending')->name('clips.trending');
	Route::get('clips', 'ClipController@index')->name('clips');
	Route::get('clips/create', 'ClipController@create')->name('clips.create');
	Route::post('clips/create', 'ClipController@store')->name('clips.store');
	Route::delete('clips/destroy/{id}', 'ClipController@destroy')->name('clips.destroy');

	// Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});
