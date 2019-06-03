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

Route::get('todos','TodoController@index')->name('todos.index');//->name('todos.index'); để ko bị lỗi
Route::get('todos/create', 'TodoController@create')->name('todos.create');
Route::get('todos/{id}/edit', 'TodoController@edit')->name('todos.edit');
Route::post('todos', 'TodoController@store')->name('todos.store');
Route::put('/todos/{id}', 'TodoController@update')->name('todos.update');
Route::delete('todos/{id}', 'TodoController@destroy')->name('todos.destroy');
//ajax
Route::resource('todos-ajax','TodoAjaxController');
