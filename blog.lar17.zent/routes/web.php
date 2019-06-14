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

Route::get('/', 'HomeController@index');
Route::get('categore/{slug}', 'HomeController@posts')->name('posts');
Route::get('/tag/{slug}', 'HomeController@tags')->name('tag');
Route::get('detail/{slug}', 'HomeController@detail')->name('detail');



Route::prefix('admin')->group(function(){
Auth::routes();
Route::middleware(['auth:web'])->group(function(){
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/listPosts', 'HomeController@listPosts')->name('listposts');
Route::get('/getListPosts', 'HomeController@getListPosts')->name('listposts');
});
});
