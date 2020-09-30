<!DOCTYPE html>
<html lang="en">

@include('backend.components.head')


<!-- begin::Body -->
<body class="m-content--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    @include('backend.components.header')

    @include('backend.components.layout')
</div>
@include('backend.components.scripts')
</body>
</html>
