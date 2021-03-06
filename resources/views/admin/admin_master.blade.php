<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/template/images/favicon.ico')}}">

    <title>Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('backend/template/css/vendors_css.css')}}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/template/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/template/css/skin_color.css')}}">

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">

        @include('admin.partials.header')

        <!-- Left side column. contains the logo and sidebar -->
       
        @include('admin.partials.sidebar')    

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
           @yield('content')
        </div>
        <!-- /.content-wrapper -->
        @include('admin.partials.footer')    

        <!-- Control Sidebar -->
      
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->


    <!-- Vendor JS -->
    <script src="{{ asset('backend/template/js/vendors.min.js')}}"></script>
    <script src="{{ asset('backend/assets/icons/feather-icons/feather.min.js')}}"></script>
    <!-- <script src="{{ asset('backend/assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}"></script> -->
    <!-- <script src="{{ asset('backend/assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}"></script> -->
    <!-- <script src="{{ asset('backend/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script> -->

    <!-- Sunny Admin App -->
    <script src="{{ asset('backend/template/js/template.js')}}"></script>
    <script src="{{ asset('backend/template/js/pages/dashboard.js')}}"></script>


</body>

</html>