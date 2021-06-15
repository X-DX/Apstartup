<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->

<head>
    @include('user/layouts/head')
</head>
<!-- END HEAD -->

<body>
    <!-- PRELOAD -->
    <div id="ms-preload" class="ms-preload">
        <div id="status">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- END PRELOAD -->

    



    <!-- HEADER -->
    @include('user/layouts/header')
    <!-- END HEADER -->

    <!-- NAVBAR -->
    @include('user/layouts/navbar')
    <!-- END NAVBAR -->

    

    <!-- home and main contant -->
    @section('main-content')
        @show
    <!-- end home and main contant -->
    @include('user/layouts/notification')
    <!-- new footer -->
    @include('user/layouts/footer')
    <!-- end new footer -->

    <!-- slidebar -->
    @include('user/layouts/sliderbar')
    <!-- end slidebar -->
    <style>
    ::-webkit-scrollbar{
        width: 12px;
    }
    ::-webkit-scrollbar-thumb{
        background: linear-gradient(transparent,#ff9800);
        border-radius: 6px;
    }
    ::-webkit-scrollbar-thumb:hover{
        background: linear-gradient(transparent,#00c6ff);
    }
    </style>

</body>

</html>