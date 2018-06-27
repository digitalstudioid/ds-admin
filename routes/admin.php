<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => config('app.adminPath') . '/user-management'], function() {
    Route::resource('modules', 'ModuleController');
    Route::resource('privileges', 'PrivilegeController');
    Route::resource('users', 'UserController');
});

Route::group(['prefix' => config('app.adminPath') . '/setting'], function() {
    Route::resource('application', 'ApplicationController');
    Route::resource('email', 'EmailController');
    Route::resource('style', 'StyleController');
});
