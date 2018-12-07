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

Route::group(['prefix' => 'reporte-ciudadano', 'namespace' => 'Manager'], function ($route) {
    $route->get('/', 'ReporteCiudadanoController@index')->name('manager.rc.index');
    $route->get('/cp/{str_cp}', 'ReporteCiudadanoController@showByPostalCode')->name('manager.rc.cp.show');
    $route->get('/show', 'ReporteCiudadanoController@show')->name('manager.rc.show');
});
