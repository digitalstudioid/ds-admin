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

Route::group(['prefix' => 'adminlte'], function () {
    Route::get('/', 'SampleAdminLTE2@index');
    Route::get('/{path}', 'SampleAdminLTE2@show');
    Route::get('layout/{path}', 'SampleAdminLTE2@layout');
    Route::get('charts/{path}', 'SampleAdminLTE2@charts');
    Route::get('UI/{path}', 'SampleAdminLTE2@UI');
    Route::get('forms/{path}', 'SampleAdminLTE2@forms');
    Route::get('tables/{path}', 'SampleAdminLTE2@tables');
    Route::get('mailbox/{path}', 'SampleAdminLTE2@mailbox');
    Route::get('examples/{path}', 'SampleAdminLTE2@examples');
});