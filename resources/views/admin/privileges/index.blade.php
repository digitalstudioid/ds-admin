@extends('adminlte2::layouts.app')

@section('contentheader_breadcrumb')
  <li><a href="#"> User Management</a></li>
  <li class="active">Privileges & Roles</li>
@endsection

@section('main-content')
	<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Title</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      Add content here...
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>
@endsection