<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | @lang('tr.website')</title>

    <!-- Bootstrap -->
    <link rel='stylesheet' href='{{asset('frontend/vendor/jquery-ui/jquery-ui.min.css')}}'>

    <link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('frontend/fonts/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/fonts/font-awesome-5/css/fontawesome-all.min.css')}}">

    <!-- Revolution slider -->
    <link rel="stylesheet" href="{{asset('frontend/vendor/revolution/settings.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/revolution/layers.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/revolution/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/revolution/settings-source.css')}}">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('frontend/vendor/css-hamburgers/dist/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/vendor/fancybox/dist/jquery.fancybox.min.css')}}">

    <link rel='stylesheet' href='{{asset('frontend/vendor/fullcalendar/fullcalendar.css')}}' />
    <link rel='stylesheet' href='{{asset('frontend/vendor/animate/animate.css')}}' />


    @if(\Lang::getLocale() == 'ar')

        <link href="{{asset('frontend/css/rtl_style.css')}}" rel="stylesheet" type="text/css" />



    @else

        <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />

@endif



    <link rel="shortcut icon" href="favicon.png">
</head>