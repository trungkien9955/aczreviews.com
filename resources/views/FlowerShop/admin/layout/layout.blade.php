<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{url('FlowerShop/admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{url('FlowerShop/admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('FlowerShop/admin/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{url('FlowerShop/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('FlowerShop/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{url('FlowerShop/admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('FlowerShop/admin/js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('FlowerShop/admin/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{url('FlowerShop/admin/images/favicon.png')}}" />
    <!-- datatables -->
    <link rel="stylesheet" href="{{url('FlowerShop/admin/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('FlowerShop/admin/css/dataTables.bootstrap4.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">



</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('FlowerShop/admin.layout.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
        @include('FlowerShop/admin.layout.sidebar')
      <!-- partial -->
      @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include('FlowerShop/admin.layout.footer')

  <!-- plugins:js -->
  <script src="{{url('FlowerShop/admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{url('FlowerShop/admin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{url('FlowerShop/admin/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{url('FlowerShop/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{url('FlowerShop/admin/js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('FlowerShop/admin/js/off-canvas.js')}}"></script>
  <script src="{{url('FlowerShop/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{url('FlowerShop/admin/js/template.js')}}"></script>
  <script src="{{url('FlowerShop/admin/js/settings.js')}}"></script>
  <script src="{{url('FlowerShop/admin/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('FlowerShop/admin/js/dashboard.js')}}"></script>
  <script src="{{url('FlowerShop/admin/js/Chart.roundedBarCharts.js')}}"></script>
  <script src="{{url('FlowerShop/admin/js/custom.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- End custom js for this page-->
</body>

</html>

