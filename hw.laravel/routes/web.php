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
Route::get('events','EventController@index')->name('events.index');//->name('events.index'); để ko bị lỗi
Route::get('events/create', 'EventController@create')->name('events.create');
Route::get('events/{id}/edit', 'EventController@edit')->name('events.edit');
Route::post('events', 'EventController@store')->name('events.store');
Route::put('/events/{id}', 'EventController@update')->name('events.update');
Route::delete('events/{id}', 'EventController@destroy')->name('events.destroy');

Route::resource('products-ajax','ProductAjaxController');
