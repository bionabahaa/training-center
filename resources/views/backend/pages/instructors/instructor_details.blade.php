@extends('frontend.layouts.master')
@section('title',__('tr.instructor_details'))
@section('content')

    <main>
        <!-- Heading Page -->
        <section class="heading-page">
            <img src="{{asset('frontend/images/newimages/bg-page.jpg')}}" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="heading-page-content">
                    <div class="au-page-title">
                        <h1>@lang('tr.instructor_details')</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('frontend_index')}}">@lang('tr.Home')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('tr.instructor_details')
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Our Team -->
        <section class="our-team section-padding-large">
            <div class="container">
                <div class="instructor-content">
                    <div class="instructor-thumb">
                        <a href="#">
                            <img src="{{ URL::to('/') }}/backend/dashboard_images/instructors/{{ $data['instructor']->image }}" alt="">
                        </a>
                    </div>
                    <div class="instructor-info">
                        <h4 class="title">
                            <b href="#">{{ $data['instructor']->fname }}</b>
                        </h4>
                        <div class="categories">
                            <strong href="#">{{ $data['instructor']->email }} </strong>
                        </div>
                        <p class="desc">
                            {{ $data['instructor']->shortbio }}
                        </p>
                        <div class="socials">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- standard list -->
        <section class="standard-list courses-2 section-padding-large">
            <div class="container">
                <div class="courses-content">
                    <div class="section-title section-title-center">
                        <h2> Our Courses </h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item">
                                <div class="item-thumb">
                                    <a href="single-course.html">
                                        <img src="images/newimages/home1-blog-1.jpg" alt="Steven Boyd">
                                    </a>
                                </div>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="single-course.html">Basic: Web Developer</a>
                                    </h3>
                                    <p class="course-desc">
                                        Morbi tristique senectus et ne malesuada fames ac turpis. Tempus egestas sed.
                                    </p>
                                    <div class="desc display-flex">
                                        <div class="comments-students">
                                            <a href="#" class="comments"><i class="fas fa-user"></i>20 Students</a>
                                            <a href="#" class="students"><i class="fas fa-book"></i>05 Lessons</a>
                                        </div>
                                        <span class="price free">Free</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item">
                                <div class="item-thumb">
                                    <a href="single-course.html">
                                        <img src="images/newimages/home1-blog-1.jpg" alt="Steven Boyd">
                                    </a>
                                </div>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="single-course.html">Basic: Web Developer</a>
                                    </h3>
                                    <p class="course-desc">
                                        Morbi tristique senectus et ne malesuada fames ac turpis. Tempus egestas sed.
                                    </p>
                                    <div class="desc display-flex">
                                        <div class="comments-students">
                                            <a href="#" class="comments"><i class="fas fa-user"></i>20 Students</a>
                                            <a href="#" class="students"><i class="fas fa-book"></i>05 Lessons</a>
                                        </div>
                                        <span class="price free">Free</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <article class="item">
                                <div class="item-thumb">
                                    <a href="single-course.html">
                                        <img src="images/newimages/home1-blog-1.jpg" alt="Steven Boyd">
                                    </a>
                                </div>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="single-course.html">Basic: Web Developer</a>
                                    </h3>
                                    <p class="course-desc">
                                        Morbi tristique senectus et ne malesuada fames ac turpis. Tempus egestas sed.
                                    </p>
                                    <div class="desc display-flex">
                                        <div class="comments-students">
                                            <a href="#" class="comments"><i class="fas fa-user"></i>20 Students</a>
                                            <a href="#" class="students"><i class="fas fa-book"></i>05 Lessons</a>
                                        </div>
                                        <span class="price free">Free</span>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection