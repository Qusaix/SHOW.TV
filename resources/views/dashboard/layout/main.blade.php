<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SHOW.TV DASHBOARD</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  {{-- <img src="{{ auth()->user()->image }}" alt="profile"> --}}
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard.users') }}">
                <span class="menu-title">Users</span>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.series') }}">
                  <span class="menu-title">Series</span>
                  <i class="mdi mdi-filmstrip menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.episodes') }}">
                  <span class="menu-title">Episodes</span>
                  <i class="mdi mdi-film menu-icon"></i>
                </a>
              </li>
           
          
            <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                </div>
                <a href="{{ route('frontend') }}" class="btn btn-block btn-lg btn-gradient-primary mt-4">Main Page</a>
               
              </span>
            </li>
          </ul>
        </nav>
        @yield('content')

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('dashboard/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('dashboard/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dashboard/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dashboard/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dashboard/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('dashboard/js/dashboard.js') }}"></script>
    <script src="{{ asset('dashboard/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>