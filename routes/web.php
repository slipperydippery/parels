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

Route::get('factsheet', ['as' => 'factsheet', 'uses' => 'PagesController@factsheet']);
Route::resource('pearldescriptions', 'PearldescriptionsControler');
Route::resource('pearlfactsheets', 'PearlfactsheetsControler');
Route::resource('pearlmanuals', 'PearlmanualsControler');

