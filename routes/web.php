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
	/* return view('adminlte2::sample.index', 
		[
		'pageTitle' 		=> 'Home 1', 
		'pageDescription' 	=> 'Control Panel'
		]); */

	/* $data = array('pageTitle'		=> 'Home 1',
                  'pageDescription' => 'Control Panel');
	return view('adminlte2::sample.index')->with($data); */

	/* return view('adminlte2::sample.index')
		->with('pageTitle', 'Home 1')
		->with('pageDescription', 'Control Panel'); */

	$pageTitle			= 'Home 1';
	$pageDescription	= 'Control Panel';
	
	return view('adminlte2::sample.index', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/index2', function() {
	$pageTitle			= 'Home 2';
	$pageDescription	= 'Control Panel';

	return view('adminlte2::sample.index2', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/layout/top-nav', function() {
	$pageTitle			= 'Top Nav Layout';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.layout.top-nav', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/layout/boxed', function() {
	$pageTitle			= 'Boxed Layout';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.layout.boxed', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/layout/fixed', function() {
	$pageTitle			= 'Fixed Layout';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.layout.fixed', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/layout/collapsed-sidebar', function() {
	$pageTitle			= 'Collapsed Sidebar Layout';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.layout.collapsed-sidebar', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/widgets', function() {
	$pageTitle			= 'Widgets';
	$pageDescription	= 'Description here...';

	return view('adminlte2::sample.pages.widgets', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/charts/chartjs', function() {
	$pageTitle			= 'ChartJS';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.charts.chartjs', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/charts/morris', function() {
	$pageTitle			= 'Morris Charts';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.charts.morris', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/charts/flot', function() {
	$pageTitle			= 'Flot Charts';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.charts.flot', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/charts/inline', function() {
	$pageTitle			= 'Inline Charts';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.charts.inline', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/UI/general', function() {
	$pageTitle			= 'UI General';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.UI.general', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/UI/icons', function() {
	$pageTitle			= 'UI Icons';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.UI.icons', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/UI/buttons', function() {
	$pageTitle			= 'UI Buttons';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.UI.buttons', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/UI/sliders', function() {
	$pageTitle			= 'UI Sliders';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.UI.sliders', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/UI/timeline', function() {
	$pageTitle			= 'UI Timeline';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.UI.timeline', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/UI/modals', function() {
	$pageTitle			= 'UI Modals';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.UI.modals', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/forms/general', function() {
	$pageTitle			= 'General Form Elements';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.forms.general', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/forms/advanced', function() {
	$pageTitle			= 'Advanced Form Elements';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.forms.advanced', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/forms/editors', function() {
	$pageTitle			= 'Text Editors';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.forms.editors', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/tables/simple', function() {
	$pageTitle			= 'Simple Tables';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.tables.simple', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/tables/data', function() {
	$pageTitle			= 'Data Tables';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.tables.data', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/calendar', function() {
	$pageTitle			= 'Calendar';
	$pageDescription	= 'Description here...';

	return view('adminlte2::sample.pages.calendar', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/mailbox/mailbox', function() {
	$pageTitle			= 'Mailbox';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.mailbox.mailbox', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/mailbox/compose', function() {
	$pageTitle			= 'Mailbox Compose';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.mailbox.compose', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/mailbox/read-mail', function() {
	$pageTitle			= 'Read Mail';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.mailbox.read-mail', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/examples/invoice', function() {
	$pageTitle			= 'Invoice';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.examples.invoice', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/examples/invoice-print', function() {
	$pageTitle			= 'Invoice-Print';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.examples.invoice-print', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/examples/profile', function() {
	$pageTitle			= 'User Profile';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.examples.profile', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/examples/login', function() {
	$pageTitle			= 'Login';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.examples.login', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/examples/register', function() {
	$pageTitle			= 'Register';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.examples.register', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/examples/lockscreen', function() {
	$pageTitle			= 'Lock Screen';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.examples.lockscreen', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/examples/404', function() {
	$pageTitle			= '404 Error Page';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.examples.404', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/examples/500', function() {
	$pageTitle			= '500 Error Page';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.examples.500', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/examples/blank', function() {
	$pageTitle			= 'Blank Page';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.examples.blank', compact('pageTitle', 'pageDescription'));
});

Route::get('adminlte/examples/pace', function() {
	$pageTitle			= 'Pace Page';
	$pageDescription	= 'Description here...';
	
	return view('adminlte2::sample.pages.examples.pace', compact('pageTitle', 'pageDescription'));
});