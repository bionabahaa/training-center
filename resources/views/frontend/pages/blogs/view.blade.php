@extends('frontend.layouts.master')
@section('title',__('tr.News'))
@section('content')



    <main>
        <!-- Heading Page -->
        <section class="heading-page">
            <img src="{{asset('frontend/images/newimages/bg-page.jpg')}}" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="heading-page-content">
                    <div class="au-page-title">
                        <h1>@lang('tr.News')</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('frontend_index')}}">@lang('tr.Home')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('tr.News')
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section class="blog-list section-padding-large">
            <div class="container">
                <div class="row">
                    <div class="col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12">
                        <div class="blog-list-content">
                            @foreach($blogs_data as $key => $row)
                            <article class="item hover-scale">
                                <figure>
                                    <a href="{{route('blog_details',$row->id )}}">
                                        <img src="{{ URL::to('/') }}/frontend/website_images/blogs/{{$row->image }}">
                                    </a>
                                    <div class="hover-border">
                                        <a href="{{route('blog_details',$row->id )}}">
                                            <i class="fas fa-link"></i>
                                        </a>
                                    </div>
                                </figure>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="{{route('blog_details',$row->id )}}" class="font-color-black">
                                            {{ $row->name }}
                                        </a>
                                    </h3>
                                    <div class="entry">
                                        <span class="date"><i class="far fa-calendar"></i> {{ $row->date }}</span>

                                        <span class="total-comments"><i class="fas fa-comment"></i> Comments</span>
{{--                                        <span class="categories">--}}
{{--                                            <i class="fas fa-tag"></i>--}}
{{--                                            <a href="#">Technology</a>--}}
{{--                                        </span>--}}
                                    </div>
                                    <p class="desc">
                                        {{ $row->description }}
                                    </p>
                                </div>
                                <div class="btn-read-more">
                                    <a href="{{route('blog_details',$row->id )}}" class="au-btn au-readmore au-btn-hover">Read more</a>
                                </div>
                            </article>

                                @endforeach

                        </div>
{{--                        <div class="pagination">--}}
{{--                            <ul class="page-numbers">--}}
{{--                                <li><span aria-current="page" class="page-numbers current">01</span></li>--}}
{{--                                <li><a class="page-numbers" href="#">02</a></li>--}}
{{--                                <li><a class="page-numbers" href="#">03</a></li>--}}
{{--                                <li><a class="page-numbers" href="#"><i class="la la-angle-right"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                    <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="right-sidebar section-padding_course">
                            <div class="widget_search">
                                <form method="POST" class="search-form">
                                    <input type="search" name="s" class="background-grey" placeholder="Search Courses">
                                </form>
                            </div>
                            <div class="widget_product_categories">
                                <div class="widget-title">
                                    <h2>Categories</h2>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="la la-pencil"></i>UI & UX Design</a></li>
                                    <li><a href="#"><i class="la la-codepen"></i>Web Developer</a></li>
                                    <li><a href="#"><i class="la la-signal"></i>Marketing</a></li>
                                    <li><a href="#"><i class="la la-language"></i>Language</a></li>
                                    <li><a href="#"><i class="la la-wordpress"></i>Wordpress</a></li>
                                </ul>
                            </div>
                            <!- <div class="widget_signupform">
                                <div class="sign-up-form">
                                    <div class="form-heading">
                                        <h3>
                                            Get Free Online Courses
                                        </h3>
                                    </div>
                                    <form method="POST" class="form-signup js-signup-form" action="includes/contact-form.php">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" placeholder="Your Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="textl" name="phone" id="phone" placeholder="Phone Number">
                                        </div>
                                        <input type="submit" class="submit au-btn-hover" value="Get It Now">
                                    </form>
                                </div>
                            </div>
                            <div class="widget_lastest_entries">
                                <div class="widget-title">
                                    <h2>Popular Courses</h2>
                                </div>
                                <ul>
                                    <li>
                                        <figure>
                                            <a href="single-course.html"><img src="images/popular-courses-1.jpg" alt="Web Design For Usability"></a>
                                        </figure>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="single-course.html">Web Design For Usability</a>
                                            </h3>
                                            <span class="price free">Free</span>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="single-course.html"><img src="images/popular-courses-2.jpg" alt="Essential Blogging Tools"></a>
                                        </figure>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="single-course.html">Essential Blogging Tools</a>
                                            </h3>
                                            <span class="price free">Free</span>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="single-course.html"><img src="images/popular-courses-3.jpg" alt="Advanced: UI Design"></a>
                                        </figure>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="single-course.html">Advanced: UI Design</a>
                                            </h3>
                                            <span class="price notfree">$65.00</span>
                                        </div>
                                    </li>
                                </ul>
                            </div> --
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

    </main>


@endsection