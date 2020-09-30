@extends('frontend.layouts.master')
@section('title',__('tr.About us'))
@section('content')



    <main>
        <!-- Heading Page -->
        <section class="heading-page">
            <img src="{{asset('frontend/images/newimages/bg-page.jpg')}}" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="heading-page-content">
                    <div class="au-page-title">
                        <h1>@lang('tr.About us')</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('frontend_index')}}">@lang('tr.Home')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('tr.About us')
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Featured -->
        <section class="featured section-padding-large">
            <div class="container">
                <div class="section-title section-title-center">
                    <h2>Our Featured</h2>
                </div>
                <div class="featured-content featured-content_2 ">
                    <div class="row">
                        @foreach($data['aboutus'] as $key => $row)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item about_articals">
                                <figure>
                               
                                        <img src="{{ URL::to('/') }}/frontend/website_images/aboutus/{{$row->image }}" class="about_img_icon" width="200" />

                              
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <b href="#">{{$row->title}}</b>
                                    </h3>
                                    <p class="desc">
                                        {{$row->description}}
                                    </p>
                                </div>
                            </article>
                        </div>

                            @endforeach

                    </div>
                </div>
            </div>
        </section>



        <!-- Our Teacher -->
        <section class="our-team section-padding-large">
            <div class="container">
                <div class="section-title section-title-center">
                    <h2> @lang('tr.Instructors')</h2>
                </div>
                <div class="our-team-content course_sliders featured-course-slider">
                    <div class="row">
                        @foreach($data['instructor'] as $key => $row)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <figure>
                                    <a href="#">
                                        <img src="{{ URL::to('/') }}/backend/dashboard_images/instructors/{{$row->image }}" alt="">

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
                                    <h4 class="title"><a href="#">{{$row->fname}}</a></h4>
                                    <p class="desc">{{$row->email}}</p>

                                </div>
                            </article>
                        </div>

                            @endforeach

                    </div>
                </div>
            </div>
        </section>




        <section class="gallery">
            <div class="container-fluid">
                <div class="gallery-content gallery-hover">
                    <div class="row">
                        @foreach($data['Gallery'] as $key => $row)
                        <div class="col px-0">
                            <figure>
                                <a href="{{ URL::to('/') }}/frontend/website_images/gallery/{{$row->image }}" class="grouped_gallery" data-fancybox="gallery">
                                    <img class="prtofolio_images" src="{{ URL::to('/') }}/frontend/website_images/gallery/{{$row->image }}" alt="">
                                </a>
                            </figure>
                        </div>

                            @endforeach

                    </div>
                </div>
            </div>
        </section>

    </main>


@endsection