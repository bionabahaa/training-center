<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title') | @lang('tr.Dashboard')</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{asset('backend/vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{asset('backend/vendors/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />
    {{--    <link href="{{asset('backend/vendors/owl.carousel/dist/owl.carousel.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--    <link href="{{asset('backend/vendors/owl.carousel/dist/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />--}}
    <link href="{{asset('backend/vendors/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/jstree/dist/themes/default/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/chartist/dist/chartist.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/vendors/flaticon/css/flaticon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/vendors/metronic/css/styles.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendors/vendors/fontawesome5/css/all.min.css')}}" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles -->



    @if(\Lang::getLocale() == 'ar')

     <link href="{{asset('backend/demo/base/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/demo/base/stylen.css')}}" rel="stylesheet" type="text/css" />


    @else

        <link href="{{asset('backend/demo/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/demo/base/stylen.css')}}" rel="stylesheet" type="text/css" />

    @endif
    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->

    @if(\Lang::getLocale() == 'ar')

      <link href="{{asset('backend/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    @else
        <link href="{{asset('backend/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    @endif




    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="{{asset('backend/demo/media/img/logo/favicon.ico')}}" />

    <!--begin::Page Vendors Styles -->
    @if(\Lang::getLocale() == 'ar')

        <link rel="shortcut icon" href="{{asset('backend/vendors/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
     @else

        <link rel="shortcut icon" href="{{asset('backend/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

     @endif
    <!--end::Page Vendors Styles -->

    @yield('stylesheet')
</head>

<!-- end::Head -->