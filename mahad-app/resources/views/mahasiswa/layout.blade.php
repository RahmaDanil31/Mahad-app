<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Pendaftar</title>

    <!-- Bootstrap -->
    <link href="{{ asset('../admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../admin/cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('../admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('../admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('../admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('../admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('../admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('../admin/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('../admin/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('../admin/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('../admin/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('../admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('../admin/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/usr')}}" class="site_title"><i class="fa fa-sign-out"></i> <span>Mahad Nurjati</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include('mahasiswa.sidebar')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('mahasiswa.header')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('mahasiswa.footer')
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('../admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('../admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('../admin/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('../admin/vendors/nprogress/nprogress.js') }}"></script>

<!-- iCheck -->
<script src="{{ asset('../admin/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('../admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('../admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

    <!-- Chart.js -->
    <script src="{{ asset('../admin/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{ asset('../admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('../admin/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('../admin/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('../admin/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('../admin/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('../admin/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('../admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('../admin/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('../admin/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('../admin/vendors/DateJS/build/date.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('../admin/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('../admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    
<!-- bootstrap-progressbar -->
<script src="{{ asset('../admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('../admin/vendors/iCheck/icheck.min.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('../admin/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{ asset('../admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
<script src="{{ asset('../admin/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('../admin/vendors/google-code-prettify/src/prettify.js') }}"></script>
<!-- jQuery Tags Input -->
<script src="{{ asset('../admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
<!-- Switchery -->
<script src="{{ asset('../admin/vendors/switchery/dist/switchery.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('../admin/vendors/select2/dist/js/select2.full.min.js') }}"></script>
<!-- Parsley -->
<script src="{{ asset('../admin/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
<!-- Autosize -->
<script src="{{ asset('../admin/vendors/autosize/dist/autosize.min.js') }}"></script>
<!-- jQuery autocomplete -->
<script src="{{ asset('../admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
<!-- starrr -->
<script src="{{ asset('../admin/vendors/starrr/dist/starrr.js') }}"></script>


    <!-- Custom Theme Scripts -->
    <script src="{{ asset('../admin/build/js/custom.min.js') }}"></script>
    <!-- jQuery Smart Wizard -->
    <!-- <script src="{{ asset('') }}../admin/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script> -->

    </body>
</html>