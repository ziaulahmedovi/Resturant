<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') </title>

    <!-- Bootstrap -->
    <link href="{{asset('public/admin/')}}//vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('public/admin/')}}//vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('public/admin/')}}//vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('public/admin/')}}//vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('public/admin/')}}//vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <!-- FullCalendar -->
    <link href="{{asset('public/admin/')}}//vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="{{asset('public/admin/')}}//vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <!-- Custom Theme Style -->
    <link href="{{asset('public/admin/')}}//build/css/custom.min.css" rel="stylesheet">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('admin.include.leftFixedMenu')

        <!-- top navigation -->
       @include('admin.include.topMenu')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('mainContent')
        <!-- /page content -->

        <!-- footer content -->
               @include('admin.include.footer')

       </div>

    <!-- jQuery -->
    <script src="{{asset('public/admin/')}}//vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('public/admin/')}}//vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('public/admin/')}}//vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('public/admin/')}}//vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{asset('public/admin/')}}//vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="{{asset('public/admin/')}}//vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="{{asset('public/admin/')}}//vendors/raphael/raphael.min.js"></script>
    <script src="{{asset('public/admin/')}}//vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="{{asset('public/admin/')}}//vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('public/admin/')}}//vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="{{asset('public/admin/')}}//vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{asset('public/admin/')}}//vendors/Flot/jquery.flot.js"></script>
    <script src="{{asset('public/admin/')}}//vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('public/admin/')}}//vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{asset('public/admin/')}}//vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{asset('public/admin/')}}//vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{asset('public/admin/')}}//vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('public/admin/')}}//vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('public/admin/')}}//vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{asset('public/admin/')}}//vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('public/admin/')}}//vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('public/admin/')}}//vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
 <!-- FullCalendar -->
    <script src="{{asset('public/admin/')}}//vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('public/admin/')}}//vendors/fullcalendar/dist/fullcalendar.min.js"></script>
  
  
    <!-- Custom Theme Scripts -->
    <script src="{{asset('public/admin/')}}//build/js/custom.min.js"></script>
    
    

  </body>
</html>