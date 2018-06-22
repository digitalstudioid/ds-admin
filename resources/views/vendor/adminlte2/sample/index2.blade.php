@extends('adminlte2::sample.app')

@section('main-content')
	@include('adminlte2::sample.partials.content_sample_index2')
@endsection

@section('additional_scripts')
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('dist/js/demo.js') }}"></script>
@endsection