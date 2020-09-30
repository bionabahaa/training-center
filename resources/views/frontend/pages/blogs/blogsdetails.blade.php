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

        <!-- Blog detail -->
        <section class="single section-padding-large section-padding_course">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="single-content">
                            <article class="item">
                                <figure>
                                    <a href="single.html">
                                        <img src="{{ URL::to('/') }}/frontend/website_images/blogs/{{ $data['currentblog']->image }}" alt="AI Development Day">
                                    </a>
                                </figure>
                                <h1 class="single-title">
                                    {{ $data['currentblog']->title }}
                                </h1>
                                <div class="info">
                                    <div class="entry">
                                        <span class="date"><i class="far fa-calendar"></i>{{ $data['currentblog']->date }}</span>
                                        <!-- <span class="likes">
                                            <i class="fas fa-heart"></i>22 Likes
                                        </span> -->
                                        <span class="total-comments"><i class="fas fa-comment"></i>Comments</span>

                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p>
                                        {{ $data['currentblog']->description }}
                                    </p>


                                </div>
                                <div class="tags-socials display-flex">
                                    <div class="tags">
                                        <span> Share This Blog On </span>

                                    </div>
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

                                <div class="comments">
                                    <div class="box-comments">
                                        <div class="box-title">
                                            <h3 class="title">Comments</h3>
                                        </div>
                                        @foreach($data['Comment'] as $key => $row)
                                        <div class="media">
                                            <img class="mr-20" src="{{asset('frontend/images/newimages/person_2.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <div class="info">
                                                    <div class="title-desc">
                                                        <h5 class="mt-0 title">
                                                            Maggie Foster <span class="date-comments">{{$row->title}}}</span>
                                                        </h5>
                                                        <p class="desc">
                                                            {{$row->comments}}}                                                        </p>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="leave-comment">
                                        <div class="box-title">
                                            <h3 class="title">Leave a Reply</h3>
                                        </div>
                                        <div class="comment-form au-form">
                                            <form method="POST" action="{{ route('store_comments') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-input">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <div class="wrap-group">
                                                                <input type="text" name="en_title" id="en_title" class="form-control m-input" placeholder="@lang('tr.Enter English Name')">
                                                            </div>
                                                        </div>


                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <div class="wrap-group">
                                                                <input type="text" name="ar_title" id="ar_title" class="form-control m-input" placeholder="@lang('tr.Enter Arabic title')">

                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <div class="wrap-group">
                                                                <textarea name="en_comments" id="en_comments" cols="30" rows="10" class="form-control m-input" placeholder="@lang('tr.Enter English comments')" required></textarea>

                                                            </div>
                                                        </div>


                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                            <div class="wrap-group">
                                                                <textarea name="ar_comments" id="ar_comments" cols="30" rows="10" class="form-control m-input" placeholder="@lang('tr.Enter Arabic comments')" required></textarea>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="wrap-group">
                                                <button type="submit" class="btn-submit">
                                                    <i class="fa fa-save"></i>&nbsp;@lang('tr.Submit')
                                                </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

{{--                    other blogs--}}
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="right-sidebar">
                            <div class="widget_lastest_entries">
                                <div class="widget-title">
                                    <h2>Other Blogs </h2>
                                </div>
                                <ul>
                                    <li>
                                        <figure>
                                            <a href="#"><img src="{{asset('frontend/images/newimages/bg-page.jpg')}}"  class="blogs_side_img" alt="Web Design For Usability"></a>
                                        </figure>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="#">Web Design For Usability</a>
                                            </h3>
                                            <!-- <span class="price free">Free</span> -->
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#"><img src="{{asset('frontend/images/newimages/bg-page.jpg')}}"  class="blogs_side_img" alt="Essential Blogging Tools"></a>
                                        </figure>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="#">Essential Blogging Tools</a>
                                            </h3>
                                            <!-- <span class="price free">Free</span> -->
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#"><img src="{{asset('frontend/images/newimages/bg-page.jpg')}}"  class="blogs_side_img" alt="Advanced: UI Design"></a>
                                        </figure>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="#">Advanced: UI Design</a>
                                            </h3>
                                            <!-- <span class="price notfree">$65.00</span> -->
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <!-- <div class="widget_search">
                                <form method="POST" class="search-form">
                                    <input type="search" name="s" class="background-grey" placeholder="Search Courses">
                                </form>
                            </div> -->
                            <!-- <div class="widget_product_categories">
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
                            </div> -->
                            <!-- <div class="widget_signupform">
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
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection