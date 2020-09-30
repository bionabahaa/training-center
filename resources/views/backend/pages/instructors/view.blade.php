@extends('frontend.layouts.master')
@section('title',__('tr.Instructors'))
@section('content')


    <main>
        <!-- Heading Page -->
        <section class="heading-page">
            <img src="{{asset('frontend/images/newimages/bg-page.jpg')}}" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="heading-page-content">
                    <div class="au-page-title">
                        <h1>@lang('tr.Our Instructors')</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('frontend_index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Instructors</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Our Team -->
        <section class="our-team section-padding-large">
            <div class="container">
                <div class="section-title section-title-center">
                    <h2>@lang('tr.Our Instructors') </h2>
                </div>
                <div class="our-team-content course_sliders featured-course-slider">
                    <div class="row">
                        @foreach($instructors as $key => $row)
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
                                    <p class="desc">
                                        {{ $row->shortbio }}</p>
                                </div>
                            </article>
                        </div>

                            @endforeach

                    </div>
                </div>
            </div>
        </section>


    </main>


@endsection