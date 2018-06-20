@extends('vendor.adminlte2.sample.app')

@section('contentheader_breadcrumb')
  <li class="active">Home 1</li>
@endsection

@section('main-content')
	@include('vendor.adminlte2.sample.partials.content_sample_index')
@endsection

@section('additionalscript')
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('dist/js/demo.js') }}"></script>
@endsection