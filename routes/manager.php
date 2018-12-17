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

Route::get('/', 'Manager\MainController@index');
Route::get('/noticias', 'Manager\MainController@news')->name('news.index');
Route::get('/noticias/create', 'Manager\MainController@createNews')->name('news.create');
Route::get('/noticias/show', 'Manager\MainController@showNews')->name('news.show');

