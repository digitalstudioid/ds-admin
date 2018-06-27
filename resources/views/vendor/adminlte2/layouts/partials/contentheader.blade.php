<section class="content-header">
	
	<h1>
		{{ $pageTitle }}
		<small>{{ $pageDescription }}</small>
	</h1>

	<ol class="breadcrumb">
		<li><a href="{{ url(config('app.adminPath')) }}"><i class="fa fa-home"></i> Home</a></li>
		@yield('contentheader_breadcrumb')
	</ol>

</section>