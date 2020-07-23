<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('frontend/menu/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('frontend/menu/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('frontend/menu/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('frontend/menu/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('frontend/menu/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('frontend/menu/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('frontend/menu/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('frontend/menu/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           @auth
           {{Auth::user()->name}}
           @else
           {{Auth('doctor')->user()->name}}
           @endauth         
        <span class="caret"></span>
       </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                   @auth
                	 <a class="dropdown-item" href="{{ route('users.edit-profile') }}">
                   <i class="fa fa-user-md" aria-hidden="true"></i>
                                        User Profile
                     </a>
                     @endauth
                     @auth('doctor')
                     <a class="dropdown-item" href="{{route('doctors.edit',auth('doctor')->user()->id)}}">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                                        Doctor Profile
                     </a>
                     @endauth

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                     <i class="fa fa-sign-out" aria-hidden="true"></i>
                         Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('frontend/menu/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">E-Health</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('frontend/menu/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          @auth
           {{Auth::user()->name}}
           @else
           {{Auth('doctor')->user()->name}}
           @endauth   
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          @auth
          <li class="nav-item has-treeview {{ (request()->is('doctors/create')) ||(request()->is('doctors')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user-md" aria-hidden="true"></i>
              <p>
                Doctor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @if(auth()->user()->isAdmin())
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('doctors.create')}}" class="nav-link {{ (request()->is('doctors/create')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Doctor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('doctors.index')}}" class="nav-link {{ (request()->is('doctors')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Doctors</p>
                </a>
              </li>
             </ul>
             @else
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('doctors.index')}}" class="nav-link {{ (request()->is('doctors')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Doctors</p>
                </a>
              </li>
             </ul>

             @endif
          </li>
          @endauth

          @auth
          @if(auth()->user()->isAdmin())
          <li class="nav-item has-treeview {{ (request()->is('types/create')) ||(request()->is('types')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
            <i style="margin-right: 8px; margin-left:5px;"class="fa fa-tags" aria-hidden="true"></i>
              <p>
                Type
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('types.create')}}" class="nav-link {{ (request()->is('types/create')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add type</p>
                </a>
              </li>
           
              <li class="nav-item">
                <a href="{{route('types.index')}}" class="nav-link {{ (request()->is('types')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Types</p>
                </a>
              </li>
          </ul>
      </li>
          @endif
          @endauth

   
         @auth
          @if(auth()->user()->isAdmin())
          <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link {{ (request()->is('users')) ? 'active' : '' }}">
            <i class="nav-icon fa fa-users" aria-hidden="true"></i>
              <p>
               Users
              </p>
            </a>
          </li>
          @endif
          @else
          <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link {{ (request()->is('users')) ? 'active' : '' }}">
            <i class="nav-icon fa fa-users" aria-hidden="true"></i>
              <p>
               Users
              </p>
            </a>
          </li>
          @endauth

          
          @auth
          <li class="nav-item has-treeview {{ (request()->is('view/request')) ||  (request()->is('request/admin')) || (request()->is('create/doctorrequest'))? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user-md" aria-hidden="true"></i>
              <p>
                Request
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            @if(auth()->user()->isAdmin())
            <li class="nav-item">
                <a href="{{route('patient-request.view')}}" class="nav-link {{ (request()->is('view/request')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Request</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('create-doctor.request')}}" class="nav-link {{ (request()->is('create/doctorrequest')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Send Request Doctor</p>
                </a>
            </li>
            @else

              <li class="nav-item">
                <a href="{{route('patients.create')}}" class="nav-link {{ (request()->is('request/admin')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Request Chat</p>
                </a>
              </li>

              @endif

             </ul>
          </li>
          @else
          <li class="nav-item has-treeview {{ (request()->is('view/adminrequest')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user-md" aria-hidden="true"></i>
              <p>
                Request
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('view-admin.request')}}" class="nav-link {{ (request()->is('view/adminrequest')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Doctor Request</p>
                </a>
              </li>
             </ul>
          </li>

          @endauth

          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-asterisk" aria-hidden="true"></i>
              <p>
               Details
              </p>
            </a>
          </li>

          @auth
          @if(auth()->user()->isAdmin())
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-comment-o" aria-hidden="true"></i>
              <p>
               View Feedback
              </p>
            </a>
          </li>
          @endif
          @if(!auth()->user()->isAdmin())
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-comment-o" aria-hidden="true"></i>
              <p>
               Given Feedback
              </p>
            </a>
          </li>
          @endif
          @endauth

          @auth('doctor')
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-comment-o" aria-hidden="true"></i>
              <p>
               Given Feedback
              </p>
            </a>
          </li>
          @endauth
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  @if(session()->has('success'))
    <div class="alert alert-success">
      {{session()->get('success')}}
    </div>
  @endif

  @if(session()->has('error'))
    <div class="alert alert-danger">
      {{session()->get('error')}}
    </div>
  @endif
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer style="position:fixed;bottom:0px;" class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('frontend/menu/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('frontend/menu/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('frontend/menu/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('frontend/menu/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('frontend/menu/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('frontend/menu/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('frontend/menu/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('frontend/menu/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('frontend/menu/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('frontend/menu/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('frontend/menu/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('frontend/menu/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('frontend/menu/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('frontend/menu/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('frontend/menu/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('frontend/menu/dist/js/demo.js')}}"></script>
<script src="https://use.fontawesome.com/ffa467bf54.js"></script>
@yield('scripts')
</body>
</html>
