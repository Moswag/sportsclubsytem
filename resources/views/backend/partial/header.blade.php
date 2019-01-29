<header class="main-header">
    <!-- Logo -->
<a href="{{ URL::route('user.dashboard') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
      <img src="{{ asset('images/zbp.png') }}" alt="logo-mini">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
        <img src="{{ asset('images/zbx.png') }}" alt="logo-md">
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">    
          <li class="clock-menu hidden-xs">
            <a href="#0">
                <p class="smsclock"><span id="date"></span> || <span id="clock"></span></p>
            </a>
          </li>     
          <!-- Site Start -->
        <li class="dropdown site-menu">
        <a target="_blank" title="Site" href="https://www.zbbank.co.zw" class="dropdown-toggle" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Visit Site">
                <i class="fa fa-globe"></i>
            </a>
        </li>
        <!-- Site Close -->
         <!-- Notifications: style can be found in dropdown.less-->

          

<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i>
        <span>{{ Auth::user()->name}}{{  Auth::user()->surname }} <i class="caret"></i></span>
    </a>

    <ul class="dropdown-menu">
        <!-- Menu Body -->
        <li class="user-body">
            <div class="col-xs-6 text-center">
                <a href="{{ route('myprofile') }}">
                    <div><i class="fa fa-briefcase"></i></div>
                    Profile
                </a>
            </div>
            <div class="col-xs-6 text-center password">
                <a href="{{route('changepassword')}}">
                    <div><i class="fa fa-lock"></i></div>
                   Password
                </a>
            </div>
        </li>

        <!-- Menu Footer-->
        <li class="user-footer">

            <div class="text-center">
            <a href="{{ URL::route('logout') }}">
                    <div><i class="fa fa-power-off"></i></div>
                    Log out
                </a>
            </div>
        </li>
    </ul>
</li>         
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>