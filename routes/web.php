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

Route::get('/detail', function () {
    return view('detail');
});

// Route::get('/category/{$category}', 'CategoryController@show');
Route::get('categories/{category}', 'CategoriesController@show')->name('categories.show');
Route::get('categories', 'CategoriesController@all')->name('categories.all');

Route::get('goods/{good}', 'GoodsController@show')->name('goods.show');

Route::resource('comments', 'CommentsController', ['only' => ['store', 'create'] ]);

Route::get('/', 'HomeController@index')->name('index');

Route::post('/uploadFile', 'UploadsController@uploadImg');
