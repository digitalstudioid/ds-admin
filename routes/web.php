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

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();
Route::get(config('app.adminPath'), 'HomeController@index')->name('home');

Route::group(['prefix' => config('app.adminPath') . '/meeting-room-reservation'], function() {
    Route::resource('building', 'Mrr\BuildingController');
    Route::resource('meeting-room', 'Mrr\MeetingRoomController');
    Route::resource('reservation', 'Mrr\ReservationController');
});

Route::group(['prefix' => config('app.adminPath') . '/user-management'], function() {
    Route::resource('modules', 'Admin\ModuleController');
    Route::resource('privileges', 'Admin\PrivilegeController');
    Route::resource('users', 'Admin\UserController');
});

Route::group(['prefix' => config('app.adminPath') . '/settings'], function() {
    Route::resource('application', 'Admin\ApplicationController');
    Route::resource('email', 'Admin\EmailController');
    Route::resource('style', 'Admin\StyleController');
});

Route::get(config('app.adminPath') . '/documentation', function() {
    $pageTitle          = 'Documentation';
    $pageDescription    = 'Detail';

    return view('pages.documentation', compact('pageTitle', 'pageDescription'));
});







/* Route::group(['prefix' => 'xxx'], function() {
    Route::get('xxx', 'Controller@index');
    Route::get('xxx', 'Controller@index');
    Route::get('xxx', 'Controller@index');
}); */

Route::group(['prefix' => 'adminlte'], function() {
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