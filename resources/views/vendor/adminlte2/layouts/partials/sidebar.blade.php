<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      
      <!--
        <li class="{{ Request::is('/') ? 'active' : null }}">
        <li class="{{ Request::is('blogs') ? 'active' : null }}">
        <li class="{{ Request::is('blogs/post') ? 'active' : null }}">
        <li class="{{ Request::is('blogs*') ? 'active' : null }}">
      -->

      <li class="header">MAIN NAVIGATION</li>

      <li class="{{ Request::is(config('app.adminPath')) ? 'active' : null }}">
        <a href="{{ url(config('app.adminPath')) }}">
          <i class="fa fa-home"></i> <span>Home</span>          
        </a>
      </li>

      <li class="treeview {{ Request::is(config('app.adminPath') . '/mrr*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-building"></i>
          <span>Meeting Room Reservation</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is(config('app.adminPath') . '/mrr/company') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/mrr/company') }}"><i class="fa fa-building"></i> Company</a>
          </li>

          <li class="{{ Request::is(config('app.adminPath') . '/mrr/building') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/mrr/building') }}"><i class="fa fa-building"></i> Building</a>
          </li>
          
          <li class="{{ Request::is(config('app.adminPath') . '/mrr/meeting-room') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/mrr/meeting-room') }}"><i class="fa fa-building"></i> Meeting Room</a>
          </li>
          
          <li class="{{ Request::is(config('app.adminPath') . '/mrr/reservation') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/mrr/reservation') }}"><i class="fa fa-bars"></i> Reservation</a>
          </li>
        </ul>
      </li>

      <li class="header">SUPER ADMIN</li>

      <li class="treeview {{ Request::is(config('app.adminPath') . '/user-management*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>User Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is(config('app.adminPath') . '/user-management/modules') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/user-management/modules') }}"><i class="fa fa-bars"></i> Modules</a>
          </li>
          
          <li class="{{ Request::is(config('app.adminPath') . '/user-management/privileges') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/user-management/privileges') }}"><i class="fa fa-bars"></i> Privileges & Roles</a>
          </li>
          
          <li class="{{ Request::is(config('app.adminPath') . '/user-management/users') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/user-management/users') }}"><i class="fa fa-users"></i> Users</a>
          </li>
        </ul>
      </li>

      <li class="treeview {{ Request::is(config('app.adminPath') . '/setting*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-gears"></i>
          <span>Setting</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is(config('app.adminPath') . '/setting/application') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/setting/application') }}"><i class="fa fa-gears"></i> Application</a>
          </li>
          
          <li class="{{ Request::is(config('app.adminPath') . '/setting/email') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/setting/email') }}"><i class="fa fa-envelope"></i> Email</a>
          </li>        
        </ul>
      </li>

      <!-- <li class="treeview {{ Request::is(config('app.adminPath') . '/api*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-fire"></i>
          <span>API Generator</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is(config('app.adminPath') . '/api/list') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/api/list') }}"><i class="fa fa-bars"></i> List API (Documentation)</a>
          </li>
          
          <li class="{{ Request::is(config('app.adminPath') . '/api/generate-secret-key') ? 'active' : null }}">
            <a href="{{ url(config('app.adminPath') . '/api/generate-secret-key') }}"><i class="fa fa-bars"></i> Generate Secret Key</a>
          </li>
        </ul>
      </li> -->

      <li class="header">USER</li>

      <li class="{{ Request::is(config('app.adminPath') . '/documentation') ? 'active' : null }}">
        <a href="{{ url(config('app.adminPath') . '/documentation') }}">
          <i class="fa fa-book"></i> <span>Documentation</span>          
        </a>
      </li>

      <li class="{{ Request::is('change-password') ? 'active' : null }}">
        <a href="{{ url('change-password') }}">
          <i class="fa fa-key"></i> <span>Change Password</span>          
        </a>
      </li>

      <li class="{{ Request::is('lock-screen') ? 'active' : null }}">
        <a href="{{ url('lock-screen') }}">
          <i class="fa fa-lock"></i> <span>Lock Screen</span>          
        </a>
      </li>

      <li class="{{ Request::is('logout') ? 'active' : null }}">
        <a href="{{ url('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="fa fa-power-off"></i> <span>Logout</span>          
        </a>
      </li>     
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>