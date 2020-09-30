<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('titlelogin')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link href="{{asset('backend/login/images/icons/favicon.ico')}}" rel="icon" type="image/png" />
    <!--===============================================================================================-->
    <link href="{{asset('backend/login/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    <link href="{{asset('backend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    <link href="{{asset('backend/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    <link href="{{asset('backend/login/vendor/animate/animate.css')}}" rel="stylesheet" type="text/css" />

    <!--===============================================================================================-->
    <link href="{{asset('backend/login/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" type="text/css" />

    <!--===============================================================================================-->
    <link href="{{asset('backend/login/vendor/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    <link href="{{asset('backend/login/css/util.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/login/css/main.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/login/css/loginstyle.css')}}" rel="stylesheet" type="text/css" />

    <!--===============================================================================================-->

    <link href="{{asset('backend/login/images/icons/favicon.ico')}}" rel="icon" type="image/png" />
</head>

<body>


@yield('logincontent')



<!--===============================================================================================-->
<script src="{{ asset('backend/login/vendor/jquery/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<!--===============================================================================================-->
<script src="{{ asset('backend/login/vendor/bootstrap/js/popper.js')}}" type="text/javascript"></script>
<script src="{{ asset('backend/login/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!--===============================================================================================-->
<script src="{{ asset('backend/login/vendor/select2/select2.min.js')}}" type="text/javascript"></script>
<!--===============================================================================================-->
<script src="{{ asset('backend/login/js/main.js')}}" type="text/javascript"></script>

</body>

</html>