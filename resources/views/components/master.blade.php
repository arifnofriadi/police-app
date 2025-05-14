<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Police App</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css')}}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!--  App Topstrip -->
    <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
        <a class="d-flex justify-content-center" href="https://adminmart.com/" target="_blank">
          <img src="../assets/images/logos/logo-adminmart.svg" alt="">
        </a>

        <div class="d-none d-xl-flex align-items-center gap-3">
          <a href="https://adminmart.com/support/"
            class="btn btn-outline-primary d-flex align-items-center gap-1 border-0 text-white px-6">
            <i class="ti ti-lifebuoy fs-5"></i>
            Support
          </a>
          <a href="https://adminmart.com/"
            class="btn btn-outline-primary d-flex align-items-center gap-1 border-0 text-white px-6">
            <i class="ti ti-gift fs-5"></i>
            Templates
          </a>
          <a href="https://adminmart.com/hire-us/"
            class="btn btn-outline-primary d-flex align-items-center gap-1 border-0 text-white px-6">
            <i class="ti ti-briefcase fs-5"></i>
            Hire Us
          </a>
        </div>
      </div>

      <div class="d-lg-flex align-items-center gap-2">
        <h3 class="text-white mb-2 mb-lg-0 fs-5 text-center">Check Modernize Premium Version</h3>
        <div class="d-flex align-items-center justify-content-center gap-2">
          <div class="dropdown d-flex">
            <a class="btn btn-outline-primary d-flex align-items-center gap-1" href="javascript:void(0)" id="drop3"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="ti ti-device-laptop fs-5"></i>
              Live Preview
              <i class="ti ti-chevron-down fs-5"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop3">
              <div class="message-body">
                <a target="_blank" href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  Bootstrap Preview
                </a>
                <a target="_blank" href="https://adminmart.com/product/modernize-angular-material-dashboard/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  Angular Preview
                </a>
                <a target="_blank" href="https://adminmart.com/product/modernize-vuetify-vue-admin-dashboard/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  VueJs Preview
                </a>
                <a target="_blank" href="https://adminmart.com/product/modernize-next-js-admin-dashboard/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  NextJs Preview
                </a>
                <a target="_blank" href="https://adminmart.com/product/modernize-react-mui-dashboard-theme/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  React Preview
                </a>
                <a target="_blank"
                  href="https://adminmart.com/product/modernize-tailwind-nextjs-dashboard-template/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  Tailwind Preview
                </a>
              </div>
            </div>
          </div>
          <div class="dropdown d-flex">
            <a class="btn btn-primary d-flex align-items-center gap-1 " href="javascript:void(0)" id="drop4"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="ti ti-shopping-cart fs-5"></i>
              Buy Now
              <i class="ti ti-chevron-down fs-5"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop4">
              <div class="message-body">
                <a target="_blank" href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  Bootstrap Preview
                </a>
                <a target="_blank" href="https://adminmart.com/product/modernize-angular-material-dashboard/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  Angular Preview
                </a>
                <a target="_blank" href="https://adminmart.com/product/modernize-vuetify-vue-admin-dashboard/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  VueJs Preview
                </a>
                <a target="_blank" href="https://adminmart.com/product/modernize-next-js-admin-dashboard/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  NextJs Preview
                </a>
                <a target="_blank" href="https://adminmart.com/product/modernize-react-mui-dashboard-theme/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  React Preview
                </a>
                <a target="_blank"
                  href="https://adminmart.com/product/modernize-tailwind-nextjs-dashboard-template/?ref=56"
                  class="dropdown-item d-flex align-items-center gap-1">
                  <i class="ti ti-external-link fs-5"></i>
                  Tailwind Preview
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Sidebar Start -->
    @include('components/sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
        @include('components/navbar')
      <!--  Header End -->
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <!--  Row 1 -->
            @yield('content')

          @include('components/footer')
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/js/sidebarmenu.js')}}"></script>
  <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{ asset('assets/js/dashboard.js')}}"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
