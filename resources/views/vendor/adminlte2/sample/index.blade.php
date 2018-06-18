@extends('vendor.adminlte2.sample.app')

@section('contentheader_breadcrumb')
  <li class="active">Home 1</li>
@endsection

@section('main-content')
	@include('vendor.adminlte2.sample.partials.content_sample_index')
@endsection