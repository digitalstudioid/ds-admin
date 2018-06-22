<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('htmlheader')
  @include('adminlte2::layouts.partials.htmlheader')
@show

<body class="hold-transition @yield('bodyclass')">

	@yield('main-content')

	@section('scripts_auth')
		@include('adminlte2::layouts.partials.scripts_auth')
		@yield('additional_scripts_auth')
	@show

</body>
</html>