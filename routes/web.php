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



























//ADMINLTE SAMPLE LINK
Route::get('adminlte', function() {
	return view('vendor.adminlte2.sample.index');
});

Route::get('adminlte/index2', function() {
	return view('vendor.adminlte2.sample.index2');
});

Route::get('adminlte/calendar', function() {
	return view('vendor.adminlte2.sample.pages.calendar');
});

Route::get('adminlte/widgets', function() {
	return view('vendor.adminlte2.sample.pages.widgets');
});

Route::get('adminlte/chartjs', function() {
	return view('vendor.adminlte2.sample.pages.charts.chartjs');
});

Route::get('adminlte/flot', function() {
	return view('vendor.adminlte2.sample.pages.charts.flot');
});

Route::get('adminlte/inline', function() {
	return view('vendor.adminlte2.sample.pages.charts.inline');
});

Route::get('adminlte/morris', function() {
	return view('vendor.adminlte2.sample.pages.charts.morris');
});

Route::get('adminlte/404', function() {
	return view('vendor.adminlte2.sample.pages.examples.404');
});

Route::get('adminlte/500', function() {
	return view('vendor.adminlte2.sample.pages.examples.500');
});

Route::get('adminlte/blank', function() {
	return view('vendor.adminlte2.sample.pages.examples.blank');
});

Route::get('adminlte/invoice-print', function() {
	return view('vendor.adminlte2.sample.pages.examples.invoice-print');
});

Route::get('adminlte/invoice', function() {
	return view('vendor.adminlte2.sample.pages.examples.invoice');
});

Route::get('adminlte/lockscreen', function() {
	return view('vendor.adminlte2.sample.pages.examples.lockscreen');
});

Route::get('adminlte/login', function() {
	return view('vendor.adminlte2.sample.pages.examples.login');
});

Route::get('adminlte/pace', function() {
	return view('vendor.adminlte2.sample.pages.examples.pace');
});

Route::get('adminlte/profile', function() {
	return view('vendor.adminlte2.sample.pages.examples.profile');
});

Route::get('adminlte/register', function() {
	return view('vendor.adminlte2.sample.pages.examples.register');
});

Route::get('adminlte/advanced', function() {
	return view('vendor.adminlte2.sample.pages.forms.advanced');
});

Route::get('adminlte/editors', function() {
	return view('vendor.adminlte2.sample.pages.forms.editors');
});

Route::get('adminlte/general-forms', function() {
	return view('vendor.adminlte2.sample.pages.forms.general');
});

Route::get('adminlte/boxed', function() {
	return view('vendor.adminlte2.sample.pages.layout.boxed');
});

Route::get('adminlte/collapsed-sidebar', function() {
	return view('vendor.adminlte2.sample.pages.layout.collapsed-sidebar');
});

Route::get('adminlte/fixed', function() {
	return view('vendor.adminlte2.sample.pages.layout.fixed');
});

Route::get('adminlte/top-nav', function() {
	return view('vendor.adminlte2.sample.pages.layout.top-nav');
});

Route::get('adminlte/compose', function() {
	return view('vendor.adminlte2.sample.pages.mailbox.compose');
});

Route::get('adminlte/mailbox', function() {
	return view('vendor.adminlte2.sample.pages.mailbox.mailbox');
});

Route::get('adminlte/read-mail', function() {
	return view('vendor.adminlte2.sample.pages.mailbox.read-mail');
});

Route::get('adminlte/data', function() {
	return view('vendor.adminlte2.sample.pages.tables.data');
});

Route::get('adminlte/simple', function() {
	return view('vendor.adminlte2.sample.pages.tables.simple');
});

Route::get('adminlte/buttons', function() {
	return view('vendor.adminlte2.sample.pages.UI.buttons');
});

Route::get('adminlte/general-ui', function() {
	return view('vendor.adminlte2.sample.pages.UI.general');
});

Route::get('adminlte/icons', function() {
	return view('vendor.adminlte2.sample.pages.UI.icons');
});

Route::get('adminlte/modals', function() {
	return view('vendor.adminlte2.sample.pages.UI.modals');
});

Route::get('adminlte/sliders', function() {
	return view('vendor.adminlte2.sample.pages.UI.sliders');
});

Route::get('adminlte/timeline', function() {
	return view('vendor.adminlte2.sample.pages.UI.timeline');
});