@extends('frontend.layouts.master')
@section('content')
    <!-- Slide show -->
    <section class="slideshow">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="au_rev_slider2" class="rev_slider fullscreenbanner slide-content" style="display:none;" data-version="5.4.1">
            <ul>
            <?php
            $rowNum = 0;
            ?>
                <!-- SLIDE  -->
                @foreach($data['Slider'] as $key => $row)

                    <?php
                    $rowNum++;
                    ?>
                <li data-index="rs-<?= $rowNum ?>" data-transition="papercut" data-thumb="{{ URL::to('/') }}/frontend/website_images/slider/{{ $row->image }}">
                    <!-- MAIN IMAGE -->

                    <img src="{{ URL::to('/') }}/frontend/website_images/slider/{{ $row->image }}" alt="">
                    <div class="overlay"></div>
                    <!-- LAYERS -->
                    <div class="tp-caption tp-resizeme slide-title slide-title-uppercase" data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":1000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['5',100,'0','0']" data-y="['center','center','center','center']" data-voffset="['-100','-100','-120','-120']" data-width="['570', '570', '570', '480']"
                         data-fontsize="['45','45','35','30']" data-color="['#f2f2f2']" data-fontweight="['bold']" data-textalign="['left','left','center','center']" data-lineheight="['58','58','40','40']" data-whitespace="normal">
                        {{ $row->title }}
                    </div>
                    <div class="tp-caption tp-resizeme slide-desc" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['5',100,'0','0']" data-y="['center','center','center','center']" data-voffset="['-4', '-4', '-20', '-20']" data-width="['550', '600', '700', '480']"
                         data-height="['auto']" data-whitespace="normal" data-type="text" data-textalign="['left','left','center','center']" data-fontsize="['16','16','20','20']" data-color="['#f2f2f2']" data-lineheight="['27','27','35','35']">
                        {{ $row->description }}
                    </div>
{{--                    <a href="#" class="tp-caption tp-resizeme slide-btn" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'--}}
{{--                       data-responsive="on" data-x="['left','left','center','center']" data-hoffset="['5',100,'0','0']" data-y="['center','center','center','center']" data-voffset="['85', '85', '85', '85']" data-width="['auto']" data-height="['auto']"--}}
{{--                       data-type="text" data-textalign="['left','left','center','center']" data-paddingtop="[13, 13, 13, 13]" data-paddingright="[53, 53, 53, 53]" data-paddingbottom="[13, 13, 13, 13]" data-paddingleft="[53, 53, 53, 53]" data-fontsize="['14','14','20','20']"--}}
{{--                       data-lineheight="['25']">--}}
{{--                         read more--}}
{{--                    </a>--}}
                </li>

                @endforeach
            </ul>
            <!-- <div class="tp-bannertimer" style="height: 10px; background: rgba(255,255,255,0.25);"></div> -->
        </div>
        <!-- END REVOLUTION SLIDER -->
    </section>






{{--our categories-------------}}




    <section class="categories section-padding-large">
        <div class="container">
            <div class="section-title section-title-center">
                <h2>Our Categories</h2>
            </div>
            <div class="categories-content">
                @foreach($data['Categories'] as $key => $row)
                    @if($key == 0)
                <article class="item cat-1">
                    <figure>

                        <a href=""><img src="{{ URL::to('/') }}/backend/dashboard_images/categories/{{ $row->image }}" alt="" style="height: 490px;"></a>
                        <div class="info">
                            <h3 class="title">
                                <a href="{{route('view_categories')}}">{{ $row->name }}</a>
                            </h3>
                            <span class="total-course">{{ $row->title }}</span>
                        </div>
                    </figure>
                </article>

                @endif

                @endforeach


                <div class="categories-group-2">
                    <div class="row">
                        @foreach($data['Categories'] as $key => $row)
                            @if($key >0)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">


                            <article class="item cat-2">
                                <figure>
                                    <a href=""><img src="{{ URL::to('/') }}/backend/dashboard_images/categories/{{ $row->image }}" alt=""></a>
                                    <div class="info">
                                        <h3 class="title">
                                            <a href="{{route('view_categories' )}}">{{ $row->name }}</a>
                                        </h3>
                                        <span class="total-course">{{ $row->title }}</span>
                                    </div>
                                </figure>
                            </article>



                        </div>
                            @endif
                        @endforeach




{{--                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">--}}
{{--                            <article class="item cat-4">--}}
{{--                                <figure>--}}
{{--                                    <a href="courses.html"><img src="{{ URL::to('/') }}/backend/dashboard_images/categories/{{ $row->image }}" alt=""></a>--}}
{{--                                    <div class="info">--}}
{{--                                        <h3 class="title">--}}
{{--                                            <a href="courses.html">{{ $row->name }}</a>--}}
{{--                                        </h3>--}}
{{--                                        <span class="total-course">{{ $row->title }}</span>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                            </article>--}}

{{--                        </div>--}}


                    </div>
                </div>



            </div>
        </div>
    </section>








    <!-- Featured -->
    <section class="featured-2 section-padding-large background-grey">
        <div class="container">
            <div class="section-title section-title-center">
                <h2>Our Differences</h2>
            </div>
            <div class="featured-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="51px">
                                        <path fill-rule="evenodd"
                                              d="M44.449,37.796 L44.449,40.211 L46.794,40.211 C47.386,40.211 47.866,40.685 47.866,41.270 L47.866,44.546 L48.927,44.546 C49.519,44.546 50.000,45.020 49.999,45.605 L49.999,49.939 C49.999,50.525 49.519,50.999 48.927,50.999 L1.073,50.999 C0.480,50.999 0.000,50.525 0.000,49.939 L0.000,45.605 C0.000,45.020 0.480,44.546 1.073,44.546 L2.133,44.546 L2.133,41.270 C2.133,40.685 2.613,40.210 3.206,40.210 L5.551,40.210 L5.551,37.796 C5.551,37.269 5.962,36.836 6.484,36.794 L6.890,23.159 L6.570,23.159 C6.007,23.159 5.551,22.708 5.551,22.153 L5.551,19.738 L3.206,19.738 C2.613,19.738 2.133,19.263 2.133,18.678 L2.133,15.403 L1.073,15.403 C0.585,15.403 0.159,15.078 0.035,14.611 C-0.089,14.145 0.122,13.656 0.547,13.420 L24.474,0.133 C24.800,-0.048 25.199,-0.048 25.526,0.133 L49.453,13.420 C49.878,13.656 50.088,14.146 49.965,14.612 C49.841,15.078 49.415,15.403 48.927,15.403 L47.867,15.403 L47.867,18.678 C47.867,19.263 47.386,19.738 46.794,19.738 L44.449,19.738 L44.449,22.153 C44.449,22.708 43.993,23.159 43.430,23.159 L43.109,23.159 L43.515,36.794 C44.038,36.837 44.449,37.269 44.449,37.796 ZM2.146,46.664 L2.146,48.880 L47.854,48.880 L47.854,46.664 L46.794,46.664 L3.206,46.664 L2.146,46.664 ZM25.000,2.272 L5.169,13.284 L44.831,13.284 L25.000,2.272 ZM45.721,17.619 L45.721,15.403 L4.279,15.403 L4.279,17.619 L45.721,17.619 ZM7.590,38.855 L7.590,40.210 L12.580,40.210 L12.580,38.855 L7.590,38.855 ZM11.537,36.736 L11.134,23.212 L9.036,23.212 L8.633,36.736 L11.537,36.736 ZM7.661,21.146 C7.766,21.112 7.877,21.094 7.994,21.094 L12.176,21.094 C12.292,21.094 12.404,21.112 12.509,21.146 L12.580,21.146 L12.580,19.738 L7.589,19.738 L7.589,21.146 L7.661,21.146 ZM21.399,36.794 L21.805,23.159 L21.485,23.159 C20.922,23.159 20.466,22.708 20.466,22.153 L20.466,19.738 L14.619,19.738 L14.619,22.153 C14.619,22.708 14.162,23.159 13.600,23.159 L13.279,23.159 L13.685,36.794 C14.208,36.837 14.619,37.269 14.619,37.796 L14.619,40.211 L20.466,40.211 L20.466,37.796 C20.466,37.269 20.876,36.837 21.399,36.794 ZM22.504,38.855 L22.504,40.210 L27.495,40.210 L27.495,38.855 L22.504,38.855 ZM26.452,36.737 L26.049,23.212 L23.951,23.212 L23.548,36.737 L26.452,36.737 ZM22.575,21.146 C22.681,21.112 22.792,21.094 22.909,21.094 L27.091,21.094 C27.207,21.094 27.319,21.112 27.424,21.146 L27.495,21.146 L27.495,19.738 L22.504,19.738 L22.504,21.146 L22.575,21.146 ZM36.314,36.794 L36.720,23.159 L36.400,23.159 C35.837,23.159 35.381,22.708 35.381,22.153 L35.381,19.738 L29.534,19.738 L29.534,22.153 C29.534,22.708 29.077,23.159 28.514,23.159 L28.194,23.159 L28.498,33.374 L28.600,36.794 C29.123,36.836 29.534,37.269 29.534,37.796 L29.534,40.210 L35.381,40.210 L35.381,37.796 C35.381,37.269 35.791,36.837 36.314,36.794 ZM37.419,38.855 L37.419,40.210 L42.410,40.210 L42.410,38.855 L37.419,38.855 ZM41.367,36.736 L41.268,33.437 L40.964,23.212 L38.866,23.212 L38.463,36.736 L41.367,36.736 ZM37.490,21.146 C37.595,21.112 37.707,21.094 37.824,21.094 L42.005,21.094 C42.122,21.094 42.234,21.112 42.339,21.146 L42.410,21.146 L42.410,19.738 L37.419,19.738 L37.419,21.146 L37.490,21.146 ZM4.279,42.329 L4.279,44.546 L45.721,44.546 L45.721,42.329 L4.279,42.329 ZM16.983,9.276 L24.526,5.088 C24.820,4.924 25.179,4.924 25.473,5.088 L33.016,9.276 C33.399,9.488 33.588,9.929 33.477,10.348 C33.365,10.767 32.981,11.059 32.542,11.059 L17.457,11.059 C17.018,11.059 16.634,10.767 16.523,10.348 C16.411,9.929 16.601,9.488 16.983,9.276 ZM28.856,9.153 L25.000,7.011 L21.143,9.153 L28.856,9.153 Z" />
                                    </svg>
                                </a>
                            </figure>
                            <div class="info">
                                <h3 class="title">
                                    <a href="#">Degree Program</a>
                                </h3>
                                <p class="desc">
                                    Ultrices mi tempus impert nulla. Petesque sit amet porttir eget.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35px" height="51px">
                                        <path fill-rule="evenodd"
                                              d="M31.756,51.000 L3.244,51.000 C1.455,51.000 -0.000,49.570 -0.000,47.812 L-0.000,14.308 C-0.000,11.322 1.483,8.671 3.763,7.026 L3.763,1.063 C3.763,0.475 4.247,-0.000 4.844,-0.000 L9.975,-0.000 C10.572,-0.000 11.056,0.475 11.056,1.063 L11.056,5.276 L13.283,5.276 L13.283,4.655 C13.283,2.897 14.738,1.467 16.527,1.467 L18.473,1.467 C20.261,1.467 21.717,2.897 21.717,4.655 L21.717,5.276 L23.944,5.276 L23.944,1.063 C23.944,0.475 24.428,-0.000 25.025,-0.000 L30.156,-0.000 C30.753,-0.000 31.237,0.475 31.237,1.063 L31.237,7.026 C33.517,8.671 35.000,11.322 35.000,14.307 L35.000,47.812 C35.000,49.570 33.545,51.000 31.756,51.000 ZM8.893,2.125 L5.925,2.125 L5.925,5.867 C6.853,5.520 7.851,5.317 8.893,5.283 L8.893,2.125 ZM19.554,4.655 C19.554,4.069 19.069,3.592 18.473,3.592 L16.527,3.592 C15.931,3.592 15.446,4.069 15.446,4.655 L15.446,5.276 L19.554,5.276 L19.554,4.655 ZM29.075,2.125 L26.107,2.125 L26.107,5.283 C27.149,5.316 28.147,5.520 29.075,5.867 L29.075,2.125 ZM32.837,47.812 L32.837,14.307 C32.837,10.499 29.684,7.401 25.808,7.401 L20.635,7.401 L14.364,7.401 L9.192,7.401 C5.316,7.401 2.163,10.499 2.163,14.307 L2.163,47.812 C2.163,48.398 2.648,48.875 3.244,48.875 L31.756,48.875 C32.352,48.875 32.837,48.398 32.837,47.812 L32.837,47.812 ZM27.964,46.745 L7.036,46.745 C5.545,46.745 4.333,45.553 4.333,44.089 L4.333,30.893 C4.333,29.428 5.545,28.237 7.036,28.237 L27.964,28.237 C29.455,28.237 30.667,29.428 30.667,30.893 L30.667,44.089 C30.667,45.553 29.454,46.745 27.964,46.745 ZM28.504,30.893 C28.504,30.600 28.262,30.362 27.964,30.362 L7.036,30.362 C6.738,30.362 6.495,30.600 6.495,30.893 L6.495,32.525 L28.504,32.525 L28.504,30.893 ZM28.505,34.650 L26.641,34.650 L26.641,36.446 C26.641,37.033 26.157,37.509 25.560,37.509 C24.963,37.509 24.478,37.033 24.478,36.446 L24.478,34.650 L6.495,34.650 L6.495,44.088 C6.495,44.381 6.738,44.619 7.036,44.619 L27.964,44.619 C28.262,44.619 28.505,44.381 28.504,44.088 L28.505,44.088 L28.505,34.650 ZM18.265,19.973 C18.062,20.172 17.787,20.284 17.500,20.284 C17.213,20.284 16.938,20.172 16.735,19.973 L12.973,16.276 C12.551,15.861 12.551,15.189 12.973,14.774 L16.735,11.077 C16.938,10.877 17.213,10.766 17.500,10.766 C17.787,10.766 18.062,10.877 18.265,11.077 L22.027,14.774 C22.230,14.973 22.344,15.243 22.344,15.525 C22.344,15.807 22.230,16.077 22.027,16.276 L18.265,19.973 ZM17.500,13.331 L15.267,15.525 L17.500,17.719 L19.733,15.525 L17.500,13.331 Z" />
                                    </svg>
                                </a>
                            </figure>
                            <div class="info">
                                <h3 class="title">
                                    <a href="#">Alumni Directory</a>
                                </h3>
                                <p class="desc">
                                    Enim nulla aliquet porttitor lacus luctus accumsan auctor.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="51px">
                                        <path fill-rule="evenodd"
                                              d="M47.005,38.075 C45.344,40.966 41.772,42.531 37.001,42.531 C36.333,42.531 35.641,42.499 34.928,42.438 C34.420,43.530 33.863,44.531 33.266,45.433 C33.634,45.999 33.850,46.674 33.850,47.400 C33.850,49.385 32.242,51.000 30.267,51.000 C29.405,51.000 28.614,50.693 27.995,50.182 C27.061,50.570 26.100,50.767 25.129,50.767 C21.343,50.767 17.800,47.742 15.330,42.438 C14.617,42.499 13.925,42.531 13.257,42.531 C8.485,42.531 4.914,40.966 3.253,38.075 C1.359,34.780 2.194,30.184 5.531,25.384 C4.843,24.393 4.257,23.407 3.780,22.437 C3.714,22.441 3.649,22.443 3.583,22.443 C1.607,22.443 -0.000,20.828 -0.000,18.842 C-0.000,17.302 0.968,15.984 2.325,15.472 C2.458,14.468 2.769,13.536 3.253,12.692 C5.146,9.396 9.524,7.825 15.330,8.330 C17.800,3.025 21.343,-0.000 25.129,-0.000 C28.915,-0.000 32.458,3.025 34.928,8.330 C36.104,8.227 37.229,8.209 38.290,8.274 C38.882,7.103 40.092,6.297 41.487,6.297 C43.462,6.297 45.070,7.912 45.070,9.898 C45.070,10.088 45.054,10.276 45.026,10.459 C45.846,11.084 46.511,11.832 47.005,12.692 C48.898,15.987 48.063,20.583 44.727,25.384 C48.064,30.184 48.899,34.780 47.005,38.075 ZM45.174,37.013 C46.572,34.580 45.912,31.040 43.379,27.169 C41.812,29.089 39.923,30.944 37.743,32.700 C37.319,35.477 36.664,38.048 35.792,40.371 C40.395,40.641 43.776,39.446 45.174,37.013 ZM38.109,29.603 C39.621,28.240 40.970,26.813 42.093,25.384 C40.970,23.954 39.621,22.527 38.109,21.165 C38.228,22.554 38.288,23.965 38.288,25.384 C38.288,26.802 38.228,28.213 38.109,29.603 ZM33.611,40.144 C34.282,38.452 34.838,36.566 35.256,34.569 C34.116,35.367 32.930,36.126 31.708,36.834 C30.484,37.544 29.237,38.197 27.983,38.788 C29.913,39.423 31.817,39.882 33.611,40.144 ZM30.267,48.875 C31.076,48.875 31.735,48.213 31.735,47.400 C31.735,46.586 31.077,45.924 30.267,45.924 C29.457,45.924 28.799,46.586 28.799,47.400 C28.799,48.213 29.457,48.875 30.267,48.875 ZM25.129,48.642 C25.693,48.642 26.257,48.545 26.814,48.357 C26.730,48.052 26.684,47.731 26.684,47.400 C26.684,45.414 28.291,43.799 30.267,43.799 C30.749,43.799 31.208,43.896 31.628,44.070 C32.009,43.480 32.371,42.840 32.714,42.155 C30.277,41.753 27.734,41.037 25.129,40.018 C22.525,41.037 19.981,41.753 17.543,42.156 C19.613,46.297 22.334,48.642 25.129,48.642 ZM16.647,40.144 C18.441,39.882 20.345,39.423 22.275,38.788 C21.020,38.197 19.774,37.544 18.549,36.834 C17.325,36.125 16.140,35.367 15.002,34.569 C15.421,36.566 15.977,38.453 16.647,40.144 ZM5.084,37.013 C6.482,39.446 9.863,40.640 14.466,40.371 C13.594,38.048 12.939,35.476 12.515,32.700 C10.335,30.944 8.446,29.089 6.880,27.169 C4.346,31.040 3.686,34.580 5.084,37.013 ZM12.149,21.163 C10.638,22.525 9.290,23.953 8.165,25.384 C9.289,26.813 10.637,28.240 12.149,29.603 C12.030,28.213 11.970,26.802 11.970,25.384 C11.970,23.965 12.031,22.553 12.149,21.163 ZM3.583,17.367 C2.773,17.367 2.115,18.029 2.115,18.842 C2.115,19.656 2.773,20.318 3.583,20.318 C4.392,20.318 5.051,19.656 5.051,18.842 C5.051,18.029 4.392,17.367 3.583,17.367 ZM5.084,13.755 C4.803,14.244 4.605,14.782 4.488,15.359 C6.027,15.763 7.166,17.171 7.166,18.843 C7.166,20.000 6.619,21.031 5.772,21.690 C6.090,22.318 6.461,22.954 6.881,23.597 C8.448,21.675 10.337,19.820 12.516,18.066 C12.940,15.289 13.594,12.718 14.466,10.396 C9.862,10.126 6.482,11.321 5.084,13.755 ZM15.002,16.198 C16.140,15.401 17.325,14.642 18.549,13.932 C19.771,13.223 21.017,12.570 22.275,11.978 C20.345,11.344 18.441,10.885 16.647,10.623 C15.977,12.314 15.420,14.201 15.002,16.198 ZM25.129,2.125 C22.334,2.125 19.613,4.470 17.543,8.611 C19.981,9.013 22.525,9.729 25.129,10.748 C27.735,9.729 30.278,9.013 32.715,8.611 C30.645,4.470 27.924,2.125 25.129,2.125 ZM33.611,10.623 C31.817,10.885 29.913,11.344 27.983,11.978 C29.238,12.570 30.484,13.222 31.708,13.932 C32.933,14.642 34.119,15.401 35.256,16.198 C34.838,14.201 34.281,12.315 33.611,10.623 ZM30.651,15.772 C28.843,14.724 26.987,13.807 25.129,13.038 C23.264,13.809 21.408,14.727 19.606,15.772 C17.800,16.821 16.081,17.977 14.489,19.211 C14.222,21.217 14.085,23.291 14.085,25.384 C14.085,27.477 14.222,29.550 14.489,31.556 C16.081,32.790 17.800,33.946 19.606,34.994 C21.415,36.043 23.271,36.960 25.129,37.729 C26.988,36.960 28.843,36.042 30.651,34.994 C32.453,33.949 34.172,32.793 35.769,31.555 C36.036,29.550 36.173,27.477 36.173,25.384 C36.173,23.291 36.036,21.218 35.769,19.212 C34.177,17.978 32.459,16.821 30.651,15.772 ZM41.487,8.422 C40.677,8.422 40.019,9.084 40.019,9.898 C40.019,10.711 40.677,11.373 41.487,11.373 C42.296,11.373 42.955,10.711 42.955,9.898 C42.955,9.084 42.296,8.422 41.487,8.422 ZM45.174,13.755 C44.885,13.253 44.510,12.801 44.055,12.404 C43.404,13.078 42.493,13.498 41.487,13.498 C39.675,13.498 38.174,12.139 37.937,10.382 C37.253,10.349 36.536,10.354 35.793,10.398 C36.665,12.720 37.319,15.292 37.743,18.068 C39.923,19.824 41.812,21.678 43.379,23.599 C45.911,19.727 46.572,16.187 45.174,13.755 ZM25.129,30.411 C22.370,30.411 20.125,28.156 20.125,25.383 C20.125,22.611 22.370,20.355 25.129,20.355 C27.888,20.355 30.133,22.611 30.133,25.383 C30.133,28.156 27.888,30.411 25.129,30.411 ZM25.129,22.480 C23.536,22.480 22.240,23.783 22.240,25.383 C22.240,26.984 23.536,28.286 25.129,28.286 C26.722,28.286 28.018,26.984 28.018,25.383 C28.018,23.783 26.722,22.480 25.129,22.480 Z" />
                                    </svg>
                                </a>
                            </figure>
                            <div class="info">
                                <h3 class="title">
                                    <a href="#">Event & Conferences</a>
                                </h3>
                                <p class="desc">
                                    Urna condimentum mattis pellentesque id nibh tortor aliquet.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="54px" height="51px">
                                        <path fill-rule="evenodd"
                                              d="M50.975,38.944 L47.648,38.944 L51.243,45.240 C51.480,45.655 51.456,46.171 51.181,46.561 C50.905,46.951 50.430,47.144 49.965,47.052 L45.946,46.264 L44.612,50.175 C44.458,50.628 44.056,50.949 43.584,50.994 C43.545,50.998 43.507,51.000 43.468,51.000 C43.039,51.000 42.638,50.769 42.420,50.388 L38.733,43.934 L35.046,50.388 C34.828,50.769 34.427,51.000 33.998,51.000 C33.960,51.000 33.921,50.998 33.882,50.994 C33.410,50.948 33.008,50.628 32.854,50.175 L31.520,46.264 L27.501,47.052 C27.035,47.144 26.561,46.951 26.286,46.561 C26.011,46.171 25.986,45.655 26.223,45.240 L29.818,38.944 L3.025,38.944 C1.357,38.944 -0.000,37.573 -0.000,35.886 L-0.000,3.058 C-0.000,1.372 1.357,-0.000 3.025,-0.000 L50.975,-0.000 C52.643,-0.000 54.000,1.372 54.000,3.058 L54.000,35.886 C54.000,37.573 52.643,38.944 50.975,38.944 ZM43.189,46.841 L44.000,44.462 C44.197,43.885 44.783,43.543 45.375,43.659 L47.820,44.139 L45.388,39.881 C44.074,41.104 42.432,41.971 40.612,42.329 L43.189,46.841 ZM46.151,32.562 C46.151,28.422 42.819,25.055 38.725,25.055 C34.630,25.055 31.299,28.422 31.299,32.562 C31.299,36.701 34.630,40.068 38.725,40.068 C42.819,40.068 46.151,36.701 46.151,32.562 ZM29.646,44.139 L32.091,43.659 C32.683,43.543 33.270,43.885 33.466,44.462 L34.277,46.841 L36.852,42.332 C35.031,41.977 33.387,41.113 32.072,39.892 L29.646,44.139 ZM30.729,26.763 L14.294,26.763 C13.625,26.763 13.084,26.215 13.084,25.540 C13.084,24.865 13.625,24.317 14.294,24.317 L33.214,24.317 C34.788,23.239 36.685,22.608 38.725,22.608 C41.363,22.608 43.760,23.664 45.529,25.378 L45.529,12.077 C43.831,11.634 42.491,10.280 42.052,8.563 L11.948,8.563 C11.509,10.280 10.169,11.634 8.471,12.077 L8.471,26.867 C10.169,27.310 11.509,28.665 11.948,30.382 L11.948,30.382 L29.119,30.382 C29.413,29.057 29.969,27.832 30.729,26.763 ZM51.580,3.058 C51.580,2.721 51.308,2.446 50.975,2.446 L3.025,2.446 C2.691,2.446 2.420,2.721 2.420,3.058 L2.420,35.886 C2.420,36.224 2.692,36.498 3.025,36.498 L29.683,36.498 C29.199,35.367 28.919,34.128 28.885,32.828 L10.891,32.828 C10.223,32.828 9.681,32.280 9.681,31.605 C9.681,30.256 8.595,29.159 7.261,29.159 C6.592,29.159 6.050,28.611 6.050,27.935 L6.050,11.009 C6.050,10.334 6.592,9.786 7.261,9.786 C8.595,9.786 9.681,8.688 9.681,7.339 C9.681,6.664 10.223,6.116 10.891,6.116 L43.109,6.116 C43.777,6.116 44.319,6.664 44.319,7.339 C44.319,8.688 45.405,9.786 46.739,9.786 C47.408,9.786 47.949,10.334 47.949,11.009 L47.949,28.969 C47.949,29.004 47.947,29.037 47.944,29.071 C48.348,30.158 48.571,31.334 48.571,32.562 C48.571,33.960 48.283,35.290 47.766,36.498 L50.975,36.498 C51.308,36.498 51.580,36.224 51.580,35.886 L51.580,3.058 ZM14.294,18.252 L39.706,18.252 C40.374,18.252 40.916,18.800 40.916,19.475 C40.916,20.151 40.374,20.699 39.706,20.699 L14.294,20.699 C13.625,20.699 13.084,20.151 13.084,19.475 C13.084,18.800 13.625,18.252 14.294,18.252 ZM31.981,14.634 L22.019,14.634 C21.351,14.634 20.809,14.086 20.809,13.411 C20.809,12.735 21.351,12.187 22.019,12.187 L31.981,12.187 C32.649,12.187 33.191,12.735 33.191,13.411 C33.191,14.086 32.649,14.634 31.981,14.634 ZM38.725,27.746 C41.351,27.746 43.488,29.906 43.488,32.562 C43.488,35.217 41.351,37.377 38.725,37.377 C36.098,37.377 33.961,35.217 33.961,32.562 C33.961,29.906 36.098,27.746 38.725,27.746 ZM38.725,34.931 C40.017,34.931 41.068,33.868 41.068,32.562 C41.068,31.255 40.017,30.193 38.725,30.193 C37.432,30.193 36.381,31.255 36.381,32.562 C36.381,33.868 37.432,34.931 38.725,34.931 Z" />
                                    </svg>
                                </a>
                            </figure>
                            <div class="info">
                                <h3 class="title">
                                    <a href="#">Certifications</a>
                                </h3>
                                <p class="desc">
                                    Penatibus et magnis dis parturient montes nasce mus mauris.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <!-- Course -->
    <section class="courses courses-2 section-padding-large" style="background:url(./frontend/images/newimages/course-5.jpg);">

        <div class="overlay"></div>
        <div class="container">
            <div class="section-title-white section-title-center">
                <h2>Courses</h2>
                <p class="title-desc">
                    Tempus egestas sed sed risus pretium quam vulputate. Sit amet est placerat in id nibh tortor egestas erat imperdiet sed.
                </p>
            </div>
            <div class="courses-content featured-course-slider course_sliders">
                <div class="row">
                    @foreach($data['course'] as $key => $row)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <article class="item wow fadeIn" data-wow-delay="0.1s">
                            <div class="item-thumb">
                                <a href="{{route('course_details',$row->id )}}">
                                    <img src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{ $row->image }}" alt="" class="courses_imaages">
                                    <span class="overlay"></span>
                                </a>
                                <div class="feadtured-course-small">
                                    <a href="#">
                                        <img src="{{ URL::to('/') }}/backend/dashboard_images/instructors/{{$row->instructor->image }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <a href="{{route('instructor_details',$row->id )}}" class="teacher">{{ $row->instructor->en_fname}}</a>
                                <h3 class="title">
                                    <a href="{{route('course_details',$row->id )}}">{{ $row->topic}}</a>
                                </h3>
                                <p class="course-desc">
                                    {{ $row->description}}
                                </p>
                                <div class="desc display-flex">
                                    <div class="comments-students">
                                        <a href="#" class="comments"><i class="fas fa-user"></i>20 Students</a>
                                        <a href="#" class="students"><i class="fas fa-book"></i>05 Lessons</a>
                                    </div>
                                    <span class="price notfree">{{ $row->price}}$</span>
                                    <!-- <span class="price free">{{ $row->price}}$</span> -->
                                </div>
                            </div>
                        </article>
                    </div>


                        @endforeach

                </div>
            </div>
        </div>
    </section>




    <!-- Testimonials -->
    <section class="home2-testimonials section-padding-large">
        <div class="container">
            <div class="section-title section-title-center">
                <h2>What Our Students Say?</h2>
            </div>
            <div class="home2-testimonials-content">
                <article class="item">
                    <div class="info">
                        <h5 class="title-item">Learning — Blended to Perfection</h5>
                        <p class="desc">
                            “Tellus integer feugiat scelerisque varius. Eu feugiaetium nibh ipsum consequat nisl vel pretium. Mi sit amet mauris commodo quis sit amet aliquet imperdiet praesent aliquet risus integer quis suscipit tellus mu.”
                        </p>
                    </div>
                    <figure>
                        <a href="#">
                            <img src="{{asset('frontend/images/newimages/person_4.jpg')}}" alt="Elizabeth King">
                        </a>
                        <h4 class="title">
                            <b href="#">Elizabeth King</b>
                        </h4>
                        <span class="job-title">Poster Design</span>
                    </figure>
                </article>
                <article class="item">
                    <div class="info">
                        <h5 class="title-item">Best Support 24/7</h5>
                        <p class="desc">
                            “Cras adipiscing enim eu turpis egestas pretium aenean pharetra magna. Augue neque gravida in fermentum. Volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris.”
                        </p>
                    </div>
                    <figure>
                        <a href="#">
                            <img src="{{asset('frontend/images/newimages/person_5.jpg')}}" alt="Gabriel Watson">
                        </a>
                        <h4 class="title">
                            <a href="#">Gabriel Watson</a>
                        </h4>
                        <span class="job-title">UI Design</span>
                    </figure>
                </article>
                <article class="item">
                    <div class="info">
                        <h5 class="title-item">Amazing Courses</h5>
                        <p class="desc">
                            “Feugiat sed lectus vestibulum mattis. Dui accumsan sit amet nulla facilisi morbi tempus iaculis urna. Eu volutpat odio facilisis mauris sit amet massa vitae tortormauris pellentesque pulvinar.”
                        </p>
                    </div>
                    <figure>
                        <a href="#">
                            <img src="{{asset('frontend/images/newimages/person_6.jpg')}}" alt="Amanda James">
                        </a>
                        <h4 class="title">
                            <a href="#">Amanda James</a>
                        </h4>
                        <span class="job-title">Marketing</span>
                    </figure>
                </article>
            </div>
        </div>
    </section>

    <!-- Events -->
    <section class="events section-padding-large bg-parten-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title section-title-center">
                <h2 class="text-white">Events</h2>
            </div>
            <div class="events-content ">

                <article class="item display-flex">

                    @foreach($data['Events'] as $key => $row)
                    <div class="info">
                        <div class="post-date display-flex-center">
{{--                            <span class="date">{{ $row->date }}</span>--}}
                           <span class="month">{{ $row->date }}</span>
                        </div>
                        <div class="course-title">
                            <h3 class="title">
                                <a href="{{route('events_details',$row->id )}}">{{ $row->title }}</a>
                            </h3>
                            <h3 class="title">
                                    <a href=""> {{ $row->title }}</a>
                                </h3>
                            <span class="price free">{{ $row->status }}</span>
                        </div>
                        <div class="meta">
                            <span class="time"><i class="far fa-clock"></i>{{ $row->time }}</span>
                            <span class="address"><i class="fas fa-map-marker-alt"></i> {{ $row->address }}</span>
                        </div>
                        <p class="desc">
                            {{ $row->description }}


                        </p>
                    </div>
                    <figure>
                        <a href="{{route('events_details',$row->id )}}">
                            <img src="{{ URL::to('/') }}/frontend/website_images/events/{{$row->image }}" alt="">
                        </a>
                    </figure>

                        @endforeach
                </article>


            </div>
        </div>
    </section>








    <!-- Lastest news -->
    <section class="blog section-padding-large">
        <div class="container">
            <div class="section-title section-title-center">
                <h2>Latest News</h2>
            </div>
            <div class="blog-content">
                <div class="row">
                    @foreach($data['Blog'] as $key => $row)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <article class="item hover-scale">
                            <figure>
                                <a href="{{route('blog_details',$row->id )}}">
                                    <img src="{{ URL::to('/') }}/frontend/website_images/blogs/{{$row->image }}" alt="">

                                </a>
                                <div class="hover-border">
                                    <a href="{{route('blog_details',$row->id )}}">
                                        <i class="fas fa-link"></i>
                                    </a>
                                </div>
                            </figure>
                            <div class="info">
                                <h3 class="title">
                                    <a href="{{route('blog_details',$row->id )}}">
                                        {{ $row->name }}
                                    </a>
                                </h3>
                                <p class="desc">
                                    {{ $row->description }}
                                </p>
                                <div class="meta">
                                    <span class="date"><i class="far fa-calendar"></i>{{ $row->date }}</span>
                                    <span class="likes">
{{--                                            <i class="fas fa-heart"></i>22 Likes--}}
                                        </span>
                                </div>
                            </div>
                        </article>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </section>



    <!-- subscribe-->
    <section class="sign-up section-padding-large">
        <div class="overlay"></div>
        <div class="container">
            <div class="sign-up-content">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-3">
                        <div class="sign-up-form">
                            <div class="form-heading">
                                <h3>
                                    Get Your Favourit Courses
                                </h3>
                            </div>
                            <form method="POST" class="form-signup js-contact-form" action="includes/contact-form.php">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                    <input type="textl" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <select type="textl" name="course" id="course" placeholder="Courses ">
                                        <option value=""> Select your Course </option>
                                        <option value="UI Design"> UI Design</option>
                                        <option value="UX Design"> UX Design</option>
                                        <option value=" HTML"> HTML</option>
                                        <option value="CSS"> CSS </option>
                                    </select>
                                </div>
                                <input type="submit" class="submit au-btn-hover" value=" Subscribe ">
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-3">
                        <div class="register-now">
                            <h2 class="register-title"> Available COURSES</h2>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Our instructors -->
    <section class="our-team section-padding-large">
        <div class="container">
            <div class="section-title section-title-center">
                <h2>Our Instructors</h2>
            </div>
            <div class="our-team-content course_sliders featured-course-slider ">
                <div class="row">

                    @foreach($data['instructor'] as $key => $row)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <article class="item">
                            <figure>
                                <a href="#">
                                    <img src="{{ URL::to('/') }}/backend/dashboard_images/instructors/{{ $row->image }}" alt="">

                                </a>
                                <div class="our-team-socials position-center">
                                    <ul class="display-flex-center">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </figure>
                            <div class="info">
                                <h4 class="title"><a href="{{route('instructor_details',$row->id )}}">{{ $row->fname }}</a></h4>
{{--                                <span class="job-title">Manager</span>--}}
                                <p class="desc">
                                    {{ $row->shortbio }}
                                </p>
                            </div>
                        </article>
                    </div>

                        @endforeach

                </div>
            </div>
        </div>
    </section>


    <!-- clients -->
    <section class="partner background-grey">
        <div class="container">
            <div class="partner-content">
                @foreach($data['Client'] as $key => $row)
                <div class="item">
                    <figure>
                        <a href="#">
                            <img src="{{ URL::to('/') }}/frontend/website_images/clients/{{ $row->image }}" alt="">

                        </a>
                    </figure>
                </div>

                    @endforeach

            </div>
        </div>
    </section>
@endsection