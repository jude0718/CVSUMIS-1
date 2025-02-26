<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CEIT - MIS</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('images/background/ceit.png') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('libraries/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('libraries/niceadmin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('libraries/niceadmin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('libraries/niceadmin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('libraries/niceadmin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('libraries/niceadmin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('libraries/niceadmin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('libraries/toastify/toastify.css') }}">

  <link rel="stylesheet" type="text/css" href="{{ asset('libraries/aos/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('libraries/tabulator-master/tabulator-master/dist/css/tabulator_bootstrap5.min.css') }}">
  <!-- Template Main CSS File -->
  <link href="{{ asset('libraries/niceadmin/assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="{{ Auth::user()->position == 4 ? 'no-sidebar' : '' }}" >
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background:rgb(244, 152, 59); color-font:black;">
    <div class="d-flex align-items-center justify-content-between">
    <a href="{{ 
      Auth::user()->position == 4 ? route('faculty_staff_profile.index') : 
      (Auth::user()->position == 2 || Auth::user()->position == 5 ? route('curriculum.index') : 
      route('admin.index')) 
    }}" class="logo d-flex align-items-center">
          <img src="{{ asset('images/background/ceit.png') }}" alt="">
          <span class="d-none d-lg-block">CEIT</span>
      </a>

      <!-- NAVIGATION (BURGER) -->
      {{-- FACULTY NAVIGATION --}}
      @if(Auth::user()->position != 4)
        <i class="bi bi-list toggle-sidebar-btn"></i>
      @endif
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number notification-count">0</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications" >
            <li class="dropdown-header">
              You have <a href="#" class="notification-count">0</a> new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2 read-all-btn">Read all</span></a>
              </li>
              <div id="notification_drop" style="max-height: 300px; overflow-y: auto;">
                
              </div>

          </ul>
        </li>

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('images/user_image/'. Auth::user()->user_image) }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ strtoupper(auth()->user()->firstname).' '.strtoupper(auth()->user()->lastname) }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ strtoupper(auth()->user()->firstname.' '.auth()->user()->lastname) }}</h6>
              <span>{{ ucwords(auth()->user()->department_dtls->department.' - '.auth()->user()->position_dtls->position)}}</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('user_profile.index') }}">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('change_password.index') }}">
                <i class="bi bi-person-lock"></i>
                <span>Privacy Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <button class="dropdown-item d-flex align-items-center logout-btn" id="logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </button>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  @if(Auth::user()->position != 4)
    <aside id="sidebar" class="sidebar"> 
        @include('layouts.navigation')
    </aside>
  @endif
  <main id="main" class="main {{ Auth::user()->position == 4 ? 'full-width' : '' }}">
    <div class="pagetitle">
      <h1>{{ $main_title }}</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">CEIT</a></li>
          <li class="breadcrumb-item active">{{ $main_title }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @yield('content')
  </main>


  <footer id="footer" class="footer"
    style="width: 100% !important;
    margin-left: 0 !important;
    transition: none !important;">
    <div class="copyright">
      &copy; Copyright <strong><span>Project Thesis</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by Our Group</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="{{ asset('libraries/tabulator-master/tabulator-master/dist/js/tabulator.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('libraries/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('libraries/sweetalert/sweetalert2@11.js') }}"></script>
  <script src="{{ asset('libraries/niceadmin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('libraries/niceadmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('libraries/niceadmin/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('libraries/niceadmin/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('libraries/niceadmin/assets/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('libraries/niceadmin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('libraries/niceadmin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('libraries/niceadmin/assets/vendor/php-email-form/validate.js') }}"></script>
  <script type="text/javascript" src="{{ asset('libraries/toastify/toastify.js') }}"></script>
  <script src="{{ asset('libraries/aos/aos.js') }}"></script>
  <script src="{{ asset('js/admin.js') }}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{ asset('libraries/niceadmin/assets/js/main.js') }}"></script>
  <script>
    AOS.init();

    $(document).ajaxError(function(event, jqXHR, settings, thrownError) {
        if (jqXHR.status === 403) {
            Swal.fire({
                icon: 'error',
                title: 'ACCESS DENIED',
                text: jqXHR.responseJSON.message,
                timer: 3000,
                timerProgressBar: true,
            });
        }
    });
  </script>
  @yield('scripts')


<style>
.full-width {
    width: 100% !important;
    margin-left: 0 !important;
    transition: none !important;
}
.sidebar {
    transition: all 0.3s ease-in-out
}
.no-sidebar .sidebar {
    display: none;
    transition: none !important;
}
.no-sidebar #main {
    width: 100%;
    margin-left: 0 !important;
}
</style>
</body>
</html>