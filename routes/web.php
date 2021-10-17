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

// Getting all routes set up
foreach(['items', 'types', 'groups', 'places', 'locations', 'modes'] as $name) {
    Route::name($name)->get('/'.$name, ucfirst($name).'Controller@index');
    if ($name == 'items')
        Route::name($name.'.search')->get('/'.$name.'/search', ucfirst($name).'Controller@search');
    Route::name($name.'.create')->get('/'.$name.'/create', ucfirst($name).'Controller@create');
    Route::name($name.'.store')->post('/'.$name.'/store', ucfirst($name).'Controller@store');
    Route::name($name.'.show')->get('/'.$name.'/{id}', ucfirst($name).'Controller@show');
    Route::name($name.'.edit')->get('/'.$name.'/{id}/edit', ucfirst($name).'Controller@edit');
    Route::name($name.'.update')->put('/'.$name.'/{id}', ucfirst($name).'Controller@update');
    Route::name($name.'.delete')->delete('/'.$name.'/{id}', ucfirst($name).'Controller@destroy');
}
