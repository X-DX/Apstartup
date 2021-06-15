<!DOCTYPE html>
<html>

<head>
    @include('user_dashboard/layouts/head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('user_dashboard/layouts/navbar')
        <!-- Main Sidebar Container -->

        @include('user_dashboard/layouts/slidebar')

        @section('main-content')
        @show


        @include('user_dashboard/layouts/footer')


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


</body>

</html>