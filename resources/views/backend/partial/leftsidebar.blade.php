<br>
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">    
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{ URL::route('user.dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>          
        </li>
        @can('isAdmin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Roles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <!-- <li><a href="{{route('addrole')}}"><i class="fa fa-circle-o text-aqua"></i> Add Role</a></li>-->
           <!-- <li><a href="{{route('viewroles')}}"><i class="fa fa-circle-o text-aqua"></i> View Roles</a></li>-->
            <li><a href="{{route('assignrole')}}"><i class="fa fa-circle-o text-aqua"></i> Assign Roles</a></li>
          </ul>
        </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-home"></i>
              <span>Homepage Quote</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('quote')}}"><i class="fa fa-circle-o text-aqua"></i> Add quote</a></li>
            </ul>
          </li>
        @endcan
        @can('isSupervisor')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('viewsportmembers') }}"><i class="fa fa-circle-o text-aqua"></i> View members</a></li>
            <li><a href="{{ route('addblog') }}"><i class="fa fa-circle-o text-aqua"></i> Post a Blog</a></li>
            <li><a href="{{ route('viewblog') }}"><i class="fa fa-circle-o text-aqua"></i> View Sport Blogs</a></li>

          </ul>
        </li>
        @endcan
        @can('isAdmin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Admin Sports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/addsport') }}"><i class="fa fa-circle-o text-aqua"></i> Add New</a></li>
            <li><a href="{{ url('/viewsport') }}"><i class="fa fa-circle-o text-aqua"></i> List</a></li>
          </ul>
        </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-home"></i>
              <span>Supervisor</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/addsupervisor') }}"><i class="fa fa-circle-o text-aqua"></i> Add Supervisor</a></li>
              <li><a href="{{ url('/viewsupervisor') }}"><i class="fa fa-circle-o text-aqua"></i> View Supervisor</a></li>

            </ul>
          </li>
        @endcan
 @can('isUser')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>User Sports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('viewsports')}}"><i class="fa fa-circle-o text-aqua"></i> View Sport</a></li>
            <li><a href="{{route('mysports')}}"><i class="fa fa-circle-o text-aqua"></i> My Sports</a></li>
          </ul>
        </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Dependants</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/dadd') }}"><i class="fa fa-circle-o text-aqua"></i> Add Dependant</a></li>
              <li><a href="{{ url('/viewdependants') }}"><i class="fa fa-circle-o text-aqua"></i> My Dependants</a></li>
            </ul>
          </li>
  @endcan
        @can('isHR')
          <li class="treeview">
            <a href="#">
              <i class="fa fa-home"></i>
              <span>HR View New users</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('hrview')}}"><i class="fa fa-circle-o text-aqua"></i> View New Members</a></li>
              <li><a href="{{route('viewmembers')}}"><i class="fa fa-circle-o text-aqua"></i> View Joined Members</a></li>
            </ul>
          </li>
        @endcan
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
