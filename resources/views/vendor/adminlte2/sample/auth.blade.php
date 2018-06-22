<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('vendor.adminlte2.sample.partials.htmlheader')
@show

<body class="@yield('bodyclass')">

	@yield('main-content')

	@section('scripts')
	    @include('vendor.adminlte2.sample.partials.scripts_auth')
	@show

	@yield('additional_scripts_auth')

</body>
</html>
