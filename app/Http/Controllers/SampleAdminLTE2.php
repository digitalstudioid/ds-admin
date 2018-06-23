<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleAdminLTE2 extends Controller
{
	public function index() {
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
	}

	public function show($path) {
		if ($path == 'index2') {
        	$pageTitle			= 'Home 2';
			$pageDescription	= 'Control Panel';

			return view('adminlte2::sample.index2', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'widgets') {
			$pageTitle			= 'Widgets';
			$pageDescription	= 'Description here...';

			return view('adminlte2::sample.pages.widgets', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'calendar') {
			$pageTitle			= 'Calendar';
			$pageDescription	= 'Description here...';

			return view('adminlte2::sample.pages.calendar', compact('pageTitle', 'pageDescription'));

		}
	}

	public function layout($path)
    {

        if ($path == 'top-nav') {
			$pageTitle			= 'Top Nav Layout';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.layout.top-nav', compact('pageTitle', 'pageDescription'));
        			
		} elseif ($path == 'boxed') {
			$pageTitle			= 'Boxed Layout';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.layout.boxed', compact('pageTitle', 'pageDescription'));
        	
		} elseif ($path == 'fixed') {
			$pageTitle			= 'Fixed Layout';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.layout.fixed', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'collapsed-sidebar') {
			$pageTitle			= 'Collapsed Sidebar Layout';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.layout.collapsed-sidebar', compact('pageTitle', 'pageDescription'));

		}
    }

    public function charts($path)
    {

        if ($path == 'chartjs') {
			$pageTitle			= 'ChartJS';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.charts.chartjs', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'morris') {
			$pageTitle			= 'Morris Charts';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.charts.morris', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'flot') {
			$pageTitle			= 'Flot Charts';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.charts.flot', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'inline') {
			$pageTitle			= 'Inline Charts';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.charts.inline', compact('pageTitle', 'pageDescription'));

		}
    }

    public function UI($path)
    {

        if ($path == 'general') {
			$pageTitle			= 'UI General';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.general', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'icons') {
			$pageTitle			= 'UI Icons';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.icons', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'buttons') {
			$pageTitle			= 'UI Buttons';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.buttons', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'sliders') {
			$pageTitle			= 'UI Sliders';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.sliders', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'timeline') {
			$pageTitle			= 'UI Timeline';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.timeline', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'modals') {
			$pageTitle			= 'UI Modals';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.modals', compact('pageTitle', 'pageDescription'));

		}
    }

    public function forms($path)
    {

        if ($path == 'general') {
			$pageTitle			= 'General Form Elements';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.forms.general', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'advanced') {
			$pageTitle			= 'Advanced Form Elements';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.forms.advanced', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'editors') {
			$pageTitle			= 'Text Editors';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.forms.editors', compact('pageTitle', 'pageDescription'));

		}
    }

    public function tables($path)
    {

        if ($path == 'simple') {
			$pageTitle			= 'Simple Tables';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.tables.simple', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'data') {
			$pageTitle			= 'Data Tables';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.tables.data', compact('pageTitle', 'pageDescription'));

		}
    }

    public function mailbox($path)
    {

        if ($path == 'mailbox') {
			$pageTitle			= 'Mailbox';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.mailbox.mailbox', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'compose') {
			$pageTitle			= 'Mailbox Compose';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.mailbox.compose', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'read-mail') {
			$pageTitle			= 'Read Mail';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.mailbox.read-mail', compact('pageTitle', 'pageDescription'));

		}
    }

    public function examples($path)
    {

        if ($path == 'invoice') {
			$pageTitle			= 'Invoice';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.invoice', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'invoice-print') {
			$pageTitle			= 'Invoice-Print';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.invoice-print', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'profile') {
			$pageTitle			= 'User Profile';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.profile', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'login') {
			$pageTitle			= 'Login';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.login', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'register') {
			$pageTitle			= 'Register';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.register', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'lockscreen') {
			$pageTitle			= 'Lock Screen';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.lockscreen', compact('pageTitle', 'pageDescription'));

		} elseif ($path == '404') {
			$pageTitle			= '404 Error Page';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.404', compact('pageTitle', 'pageDescription'));

		} elseif ($path == '500') {
			$pageTitle			= '500 Error Page';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.500', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'blank') {
			$pageTitle			= 'Blank Page';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.blank', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'pace') {
			$pageTitle			= 'Pace Page';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.pace', compact('pageTitle', 'pageDescription'));
		
		}
    }

    public function all($path)
    {

        if ($path == null) {
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
        
        } elseif ($path == 'index2') {
        	$pageTitle			= 'Home 2';
			$pageDescription	= 'Control Panel';

			return view('adminlte2::sample.index2', compact('pageTitle', 'pageDescription'));
		
		} elseif ($path == 'layout/top-nav') {
			$pageTitle			= 'Top Nav Layout';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.layout.top-nav', compact('pageTitle', 'pageDescription'));
        			
		} elseif ($path == 'layout/boxed') {
			$pageTitle			= 'Boxed Layout';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.layout.boxed', compact('pageTitle', 'pageDescription'));
        	
		} elseif ($path == 'layout/fixed') {
			$pageTitle			= 'Fixed Layout';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.layout.fixed', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'layout/collapsed-sidebar') {
			$pageTitle			= 'Collapsed Sidebar Layout';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.layout.collapsed-sidebar', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'widgets') {
			$pageTitle			= 'Widgets';
			$pageDescription	= 'Description here...';

			return view('adminlte2::sample.pages.widgets', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'charts/chartjs') {
			$pageTitle			= 'ChartJS';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.charts.chartjs', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'charts/morris') {
			$pageTitle			= 'Morris Charts';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.charts.morris', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'charts/flot') {
			$pageTitle			= 'Flot Charts';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.charts.flot', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'charts/inline') {
			$pageTitle			= 'Inline Charts';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.charts.inline', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'UI/general') {
			$pageTitle			= 'UI General';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.general', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'UI/icons') {
			$pageTitle			= 'UI Icons';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.icons', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'UI/buttons') {
			$pageTitle			= 'UI Buttons';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.buttons', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'UI/sliders') {
			$pageTitle			= 'UI Sliders';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.sliders', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'UI/timeline') {
			$pageTitle			= 'UI Timeline';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.timeline', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'UI/modals') {
			$pageTitle			= 'UI Modals';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.UI.modals', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'forms/general') {
			$pageTitle			= 'General Form Elements';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.forms.general', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'forms/advanced') {
			$pageTitle			= 'Advanced Form Elements';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.forms.advanced', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'forms/editors') {
			$pageTitle			= 'Text Editors';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.forms.editors', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'tables/simple') {
			$pageTitle			= 'Simple Tables';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.tables.simple', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'tables/data') {
			$pageTitle			= 'Data Tables';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.tables.data', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'calendar') {
			$pageTitle			= 'Calendar';
			$pageDescription	= 'Description here...';

			return view('adminlte2::sample.pages.calendar', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'mailbox/mailbox') {
			$pageTitle			= 'Mailbox';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.mailbox.mailbox', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'mailbox/compose') {
			$pageTitle			= 'Mailbox Compose';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.mailbox.compose', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'mailbox/read-mail') {
			$pageTitle			= 'Read Mail';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.mailbox.read-mail', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'examples/invoice') {
			$pageTitle			= 'Invoice';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.invoice', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'examples/invoice-print') {
			$pageTitle			= 'Invoice-Print';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.invoice-print', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'examples/profile') {
			$pageTitle			= 'User Profile';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.profile', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'examples/login') {
			$pageTitle			= 'Login';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.login', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'examples/register') {
			$pageTitle			= 'Register';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.register', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'examples/lockscreen') {
			$pageTitle			= 'Lock Screen';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.lockscreen', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'examples/404') {
			$pageTitle			= '404 Error Page';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.404', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'examples/500') {
			$pageTitle			= '500 Error Page';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.500', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'examples/blank') {
			$pageTitle			= 'Blank Page';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.blank', compact('pageTitle', 'pageDescription'));

		} elseif ($path == 'examples/pace') {
			$pageTitle			= 'Pace Page';
			$pageDescription	= 'Description here...';
			
			return view('adminlte2::sample.pages.examples.pace', compact('pageTitle', 'pageDescription'));
		
		} else {
			$pageTitle			= 'Home 1';
			$pageDescription	= 'Control Panel';
			
			return view('adminlte2::sample.index', compact('pageTitle', 'pageDescription'));

		}
    }
}
