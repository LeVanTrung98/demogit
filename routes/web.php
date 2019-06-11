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

Route::get('articles','ArticleController@index')->name('list.Article');
Route::get('articles/{id}/delete','ArticleController@destroy')->name('delete.Article');
Route::get('articles/create','ArticleController@create')->name('showCreate.Article');
Route::post('articles/create','ArticleController@store')->name('create.Article');
Route::get('articles/{id}/edit','ArticleController@edit')->name('edit.Article');
Route::put('articles/{id}/edit','ArticleController@update')->name('update.Article');
Route::get('articles/{id}/create','ArticleController@ClickHere')->name('showCreateClick.Article');





Route::get('categories','CategoryController@index');
Route::get('categories/{id}/article','CategoryController@Click')->name('click.categories');

