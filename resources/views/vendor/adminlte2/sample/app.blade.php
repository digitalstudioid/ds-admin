<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
  @include('adminlte2::sample.partials.htmlheader')
@show

<body class="hold-transition skin-blue @yield('bodyclass') sidebar-mini">
  
  <div class="wrapper">

    @include('adminlte2::sample.partials.mainheader')
    @include('adminlte2::sample.partials.sidebar')

    <div class="content-wrapper">    
      
      @include('adminlte2::sample.partials.contentheader')

      <section class="content">      
        @yield('main-content')
      </section>

    </div>
    
    @include('adminlte2::sample.partials.footer')
    @include('adminlte2::sample.partials.controlsidebar')

  </div>

  @section('scripts')
      @include('adminlte2::sample.partials.scripts')
      @yield('additional_scripts')
  @show 

</body>
</html>