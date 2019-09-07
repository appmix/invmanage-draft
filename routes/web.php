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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::name('modes')->get('/modes', 'ModesController@index');
Route::name('modes.create')->get('/modes/create', 'ModesController@create');
Route::name('modes.store')->post('/modes/store', 'ModesController@store');
Route::name('modes.show')->get('/modes/{id}', 'ModesController@show');
Route::name('modes.edit')->get('/modes/{id}/edit', 'ModesController@edit');
Route::name('modes.update')->put('/modes/{id}', 'ModesController@update');
Route::name('modes.delete')->delete('/modes/{id}', 'ModesController@destroy');