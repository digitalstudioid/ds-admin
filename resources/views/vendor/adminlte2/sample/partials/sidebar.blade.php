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

      <li class="{{ Request::is('adminlte') ? 'active' : null }}">
        <a href="{{ url('adminlte') }}">
          <i class="fa fa-home"></i> <span>Home v1</span>          
        </a>
      </li>      

      <li class="{{ Request::is('adminlte/index2') ? 'active' : null }}">
        <a href="{{ url('adminlte/index2') }}">
          <i class="fa fa-home"></i> <span>Home v2</span>          
        </a>
      </li>
      
      <li class="treeview {{ Request::is('adminlte/layout*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Layout Options</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('adminlte/layout/top-nav') ? 'active' : null }}">
            <a href="{{ url('adminlte/layout/top-nav') }}"><i class="fa fa-circle-o"></i> Top Navigation</a>
          </li>
          
          <li class="{{ Request::is('adminlte/layout/boxed') ? 'active' : null }}">
            <a href="{{ url('adminlte/layout/boxed') }}"><i class="fa fa-circle-o"></i> Boxed</a>
          </li>
          
          <li class="{{ Request::is('adminlte/layout/fixed') ? 'active' : null }}">
            <a href="{{ url('adminlte/layout/fixed') }}"><i class="fa fa-circle-o"></i> Fixed</a>
          </li>
          
          <li class="{{ Request::is('adminlte/layout/collapsed-sidebar') ? 'active' : null }}">
            <a href="{{ url('adminlte/layout/collapsed-sidebar') }}"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a>
          </li>
        </ul>
      </li>

      <li class="{{ Request::is('adminlte/widgets') ? 'active' : null }}">
        <a href="{{ url('adminlte/widgets') }}">
          <i class="fa fa-th"></i> <span>Widgets</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">new</small>
          </span>
        </a>
      </li>
      
      <li class="treeview {{ Request::is('adminlte/charts*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Charts</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('adminlte/charts/chartjs') ? 'active' : null }}">
            <a href="{{ url('adminlte/charts/chartjs') }}"><i class="fa fa-circle-o"></i> ChartJS</a>
          </li>
          
          <li class="{{ Request::is('adminlte/charts/morris') ? 'active' : null }}">
            <a href="{{ url('adminlte/charts/morris') }}"><i class="fa fa-circle-o"></i> Morris</a>
          </li>
          
          <li class="{{ Request::is('adminlte/charts/flot') ? 'active' : null }}">
            <a href="{{ url('adminlte/charts/flot') }}"><i class="fa fa-circle-o"></i> Flot</a>
          </li>
          
          <li class="{{ Request::is('adminlte/charts/inline') ? 'active' : null }}">
            <a href="{{ url('adminlte/charts/inline') }}"><i class="fa fa-circle-o"></i> Inline charts</a>
          </li>
        </ul>
      </li>

      <li class="treeview {{ Request::is('adminlte/UI*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>UI Elements</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('adminlte/UI/general') ? 'active' : null }}">
            <a href="{{ url('adminlte/UI/general') }}"><i class="fa fa-circle-o"></i> General</a>
          </li>
          
          <li class="{{ Request::is('adminlte/UI/icons') ? 'active' : null }}">
            <a href="{{ url('adminlte/UI/icons') }}"><i class="fa fa-circle-o"></i> Icons</a>
          </li>
          
          <li class="{{ Request::is('adminlte/UI/buttons') ? 'active' : null }}">
            <a href="{{ url('adminlte/UI/buttons') }}"><i class="fa fa-circle-o"></i> Buttons</a>
          </li>
          
          <li class="{{ Request::is('adminlte/UI/sliders') ? 'active' : null }}">
            <a href="{{ url('adminlte/UI/sliders') }}"><i class="fa fa-circle-o"></i> Sliders</a>
          </li>
          
          <li class="{{ Request::is('adminlte/UI/timeline') ? 'active' : null }}">
            <a href="{{ url('adminlte/UI/timeline') }}"><i class="fa fa-circle-o"></i> Timeline</a>
          </li>
          
          <li class="{{ Request::is('adminlte/UI/modals') ? 'active' : null }}">
            <a href="{{ url('adminlte/UI/modals') }}"><i class="fa fa-circle-o"></i> Modals</a>
          </li>
        </ul>
      </li>

      <li class="treeview {{ Request::is('adminlte/forms*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Forms</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('adminlte/forms/general') ? 'active' : null }}">
            <a href="{{ url('adminlte/forms/general') }}"><i class="fa fa-circle-o"></i> General Elements</a>
          </li>
          
          <li class="{{ Request::is('adminlte/forms/advanced') ? 'active' : null }}">
            <a href="{{ url('adminlte/forms/advanced') }}"><i class="fa fa-circle-o"></i> Advanced Elements</a>
          </li>
          
          <li class="{{ Request::is('adminlte/forms/editors') ? 'active' : null }}">
            <a href="{{ url('adminlte/forms/editors') }}"><i class="fa fa-circle-o"></i> Editors</a>
          </li>
        </ul>
      </li>

      <li class="treeview {{ Request::is('adminlte/tables*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-table"></i> <span>Tables</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('adminlte/tables/simple') ? 'active' : null }}">
            <a href="{{ url('adminlte/tables/simple') }}"><i class="fa fa-circle-o"></i> Simple tables</a>
          </li>
          
          <li class="{{ Request::is('adminlte/tables/data') ? 'active' : null }}">
            <a href="{{ url('adminlte/tables/data') }}"><i class="fa fa-circle-o"></i> Data tables</a>
          </li>
        </ul>
      </li>

      <li class="{{ Request::is('adminlte/calendar') ? 'active' : null }}">
        <a href="{{ url('adminlte/calendar') }}">
          <i class="fa fa-calendar"></i> <span>Calendar</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-red">3</small>
            <small class="label pull-right bg-blue">17</small>
          </span>
        </a>
      </li>

      <!-- <li class="{{ Request::is('adminlte/mailbox/mailbox') ? 'active' : null }}">
        <a href="{{ url('adminlte/mailbox/mailbox') }}">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow">12</small>
            <small class="label pull-right bg-green">16</small>
            <small class="label pull-right bg-red">5</small>
          </span>
        </a>
      </li> -->

      <li class="treeview {{ Request::is('adminlte/mailbox*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('adminlte/mailbox/mailbox') ? 'active' : null }}">
            <a href="{{ url('adminlte/mailbox/mailbox') }}">Inbox
              <span class="pull-right-container">
                <span class="label label-primary pull-right">13</span>
              </span>
            </a>
          </li>

          <li class="{{ Request::is('adminlte/mailbox/compose') ? 'active' : null }}">
            <a href="{{ url('adminlte/mailbox/compose') }}">Compose</a>
          </li>

          <li class="{{ Request::is('adminlte/mailbox/read-mail') ? 'active' : null }}">
            <a href="{{ url('adminlte/mailbox/read-mail') }}">Read</a>
          </li>
        </ul>
      </li>

      <li class="treeview {{ Request::is('adminlte/examples*') ? 'active' : null }}">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Examples</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('adminlte/examples/invoice') ? 'active' : null }}">
            <a href="{{ url('adminlte/examples/invoice') }}"><i class="fa fa-circle-o"></i> Invoice</a>
          </li>
          
          <li class="{{ Request::is('adminlte/examples/profile') ? 'active' : null }}">
            <a href="{{ url('adminlte/examples/profile') }}"><i class="fa fa-circle-o"></i> Profile</a>
          </li>
          
          <li class="{{ Request::is('adminlte/examples/login') ? 'active' : null }}">
            <a href="{{ url('adminlte/examples/login') }}"><i class="fa fa-circle-o"></i> Login</a>
          </li>
          
          <li class="{{ Request::is('adminlte/examples/register') ? 'active' : null }}">
            <a href="{{ url('adminlte/examples/register') }}"><i class="fa fa-circle-o"></i> Register</a>
          </li>
          
          <li class="{{ Request::is('adminlte/examples/lockscreen') ? 'active' : null }}">
            <a href="{{ url('adminlte/examples/lockscreen') }}"><i class="fa fa-circle-o"></i> Lockscreen</a>
          </li>
          
          <li class="{{ Request::is('adminlte/examples/404') ? 'active' : null }}">
            <a href="{{ url('adminlte/examples/404') }}"><i class="fa fa-circle-o"></i> 404 Error</a>
          </li>
          
          <li class="{{ Request::is('adminlte/examples/500') ? 'active' : null }}">
            <a href="{{ url('adminlte/examples/500') }}"><i class="fa fa-circle-o"></i> 500 Error</a>
          </li>
          
          <li class="{{ Request::is('adminlte/examples/blank') ? 'active' : null }}">
            <a href="{{ url('adminlte/examples/blank') }}"><i class="fa fa-circle-o"></i> Blank Page</a>
          </li>
          
          <li class="{{ Request::is('adminlte/examples/pace') ? 'active' : null }}">
            <a href="{{ url('adminlte/examples/pace') }}"><i class="fa fa-circle-o"></i> Pace Page</a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Level One
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
              <li class="treeview">
                <a href="#"><i class="fa fa-circle-o"></i> Level Two
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>                  
                  <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        </ul>
      </li>

      <li>
        <a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a>
      </li>

      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>      
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>      
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>