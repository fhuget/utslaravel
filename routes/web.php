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

Route::get('/index2','StislaController@index');

Route::get('/gigguide','GigguideController@index');
Route::get('/gigguide/export_excel', 'GigguideController@export_excel');
Route::get('/gigguide/cetak_pdf', 'GigguideController@cetak_pdf');
Route::post('/gigguide/create','GigguideController@create');
Route::get('/gigguide/{id}/edit','GigguideController@edit');
Route::post('/gigguide/{id}/update','GigguideController@update');
Route::get('/gigguide/{id}/delete','GigguideController@delete');
Route::get('/gigguide/search','GigguideController@search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('gigguide.index');