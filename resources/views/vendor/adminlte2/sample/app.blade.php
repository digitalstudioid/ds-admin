<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('vendor.adminlte2.sample.partials.htmlheader')
@show

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('vendor.adminlte2.sample.partials.mainheader')
  @include('vendor.adminlte2.sample.partials.sidebar')

  <div class="content-wrapper">    
    @include('vendor.adminlte2.sample.partials.contentheader')

    <section class="content">      
      @yield('main-content')
    </section>
  </div>
  
  @include('vendor.adminlte2.sample.partials.footer')
  @include('vendor.adminlte2.sample.partials.controlsidebar')
</div>

@section('scripts')
    @include('vendor.adminlte2.sample.partials.scripts')
@show

</body>
</html>
