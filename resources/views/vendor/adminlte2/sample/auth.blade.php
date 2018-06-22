<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
  @include('vendor.adminlte2.sample.partials.htmlheader')
@show

<body class="hold-transition @yield('bodyclass')">

	@yield('main-content')

	@section('scripts_auth')
		@include('vendor.adminlte2.sample.partials.scripts_auth')
		@yield('additional_scripts_auth')
	@show

</body>
</html>