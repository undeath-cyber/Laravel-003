<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard | {{ $title }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin') }}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.png" />

  {{-- text editor summernote --}}
  <!-- place this script inside your head tag -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
  {{-- akhirnya --}}
</head>
<body>
  <div class="container-scroller">
  

    {{-- Navbar --}}
    @include('dashboard.partials.navbar')




    <div class="container-fluid page-body-wrapper">
      

        {{-- sidebar --}}
        @include('dashboard.partials.sidebar')


        

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  
                  @yield('container')
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->

        {{-- footer --}}
        @include('dashboard.partials.footer')


      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('admin') }}/vendors/base/vendor.bundle.base.js"></scrip>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('admin') }}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ asset('admin') }}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{ asset('admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('admin') }}/js/off-canvas.js"></script>
  <script src="{{ asset('admin') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('admin') }}/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('admin') }}/js/dashboard.js"></script>
  <script src="{{ asset('admin') }}/js/data-table.js"></script>
  <script src="{{ asset('admin') }}/js/jquery.dataTables.js"></script>
  <script src="{{ asset('admin') }}/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="{{ asset('admin') }}/js/jquery.cookie.js" type="text/javascript"></script>
  // <!-- place this script before closing body tag --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <script>
      $(document).ready(function() {
        $('.summernote').summernote({
          height: 200
        });
    });
    </script>

</body>

</html>
