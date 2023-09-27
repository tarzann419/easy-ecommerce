<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">

<title>Easy-Ecommerce</title>

<!-- Vendors Style-->
<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

<!-- Style-->
<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">


<style>
    /* Styles for the toastr notifications */
    .toast {
        position: fixed;
        top: 20px;
        right: 20px;
        min-width: 250px;
        max-width: 350px;
        padding: 15px;
        border-radius: 4px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        background-color: #333;
        color: #fff;
        opacity: 0.9;
        z-index: 10000;
    }

    .toast-success {
        background-color: #28a745;
    }

    .toast-error {
        background-color: #dc3545;
    }

    .toast-info {
        background-color: #17a2b8;
    }

    .toast-warning {
        background-color: #ffc107;
    }

    /* Close button styles */
    .toast-close-button {
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
    }

    /* Progress bar styles */
    .toast-progress {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background-color: #007bff;
    }
</style>


</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

    @include('admin.body.header')

    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.body.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        

    @yield('admin')



    </div>
    <!-- /.content-wrapper -->
    @include('admin.body.footer')


    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<!-- Vendor JS -->
<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
<script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
<script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

<script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('backend/js/pages/data-table.js') }}"></script>


<!-- /// Tgas Input Script -->
<script src="{{ asset('../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>

<!-- // CK EDITOR  -->
<script src="{{ asset('../assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
<script src="{{ asset('backend/js/pages/editor.js') }}"></script>


<!-- Sunny Admin App -->
<script src="{{ asset('backend/js/template.js') }}"></script>
<script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="{{ asset('backend/js/code.js') }}"></script>


</body>

</html>