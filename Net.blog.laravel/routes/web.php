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

Route::get('/','PostController@index');

Route::get('blog/{slug}','PostController@detail');

Route::get('category/{slug}','PostController@category');

Route::get('tag/{slug}','PostController@tag');

Route::get('/search/posts', 'PostController@searchByPost');
Route::get('/search', 'PostController@searchAll');



//Route gọi đến view upload ảnh
Route::get('file','FileController@index');
//Route để lưu ảnh vào storage
Route::post('file','Filecontroller@upload');

Route::prefix('admin')->group(function() {

	Auth::routes();

	Route::middleware(['auth:web'])->group(function() {
		
		Route::get('/dashboard','AdminController@index');
		//quan li ng dung
		Route::get('getlistusers','UserController@getListUser')->name('getlistusers');
		
		Route::resource('users','UserController');
		//Quản lý POST
		Route::get('posts/getlistposts','AjaxPostController@getListPosts')->name('getlistposts');

		Route::delete('posts/removetag/{tag_id}','AjaxPostController@removePostTag')->name('removetag');
		
		Route::resource('posts','AjaxPostController');
		
		//Quản lý CATEGORY
		Route::get('getlistcategories','AjaxCategoryController@getListCategories')->name('getlistcategories');
		
		Route::resource('categories','AjaxCategoryController');

		//Quản lý TAG
		Route::get('getlisttags','AjaxTagController@getListTags')->name('getlisttags');
		
		Route::resource('tags','AjaxTagController');
	});
});

