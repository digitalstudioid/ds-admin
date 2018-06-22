<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
  @include('adminlte2::layouts.partials.htmlheader')
@show

<body class="hold-transition skin-blue @yield('bodyclass') sidebar-mini">
  
  <div class="wrapper">

    @include('adminlte2::layouts.partials.mainheader')
    @include('adminlte2::layouts.partials.sidebar')

    <div class="content-wrapper">    
      
      @include('adminlte2::layouts.partials.contentheader')

      <section class="content">      
        @yield('main-content')
      </section>

    </div>
    
    @include('adminlte2::layouts.partials.footer')
    @include('adminlte2::layouts.partials.controlsidebar')

  </div>

  @section('scripts')
      @include('adminlte2::layouts.partials.scripts')
      @yield('additional_scripts')
  @show 

</body>
</html>