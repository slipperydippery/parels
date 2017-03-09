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

Route::get('/', ['as' => 'welcome', 'uses' => 'PagesController@welcome']);

Route::get('/test', function () {
	return view('test');
});

Route::get('factsheet', ['as' => 'factsheet', 'uses' => 'PagesController@factsheet']);
Route::resource('pearls', 'PearlsController');
Route::resource('videos', 'VideosController');
Route::get('videos/createForPearl/{pearl}', ['as' => 'videos.createForPearl', 'uses' => 'VideosController@createForPearl']);
// Route::resource('pearldescriptions', 'PearldescriptionsControler');
// Route::resource('pearlfactsheets', 'PearlfactsheetsControler');
// Route::resource('pearlmanuals', 'PearlmanualsControler');

