<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

</head>

<body class="hold-transition sidebar-mini ">
    <div class="wrapper" id="app">
        <!-- Navbar -->
        @include('admin.app.navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('admin.app.sidebar')
        <!-- End Main Sidebar Container -->
        <!-- Content Wrapper. Contains page content -->
        @yield('jcontent')
        @yield('content')
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('admin.app.footer')
        <!--end Main Footer -->
    </div>

    <!-- jQuery -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
