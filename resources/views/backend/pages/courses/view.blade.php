@extends('frontend.layouts.master')
@section('title',__('tr.Courses'))
@section('content')


    <main>
        <!-- Heading Page -->
        <section class="heading-page">
            <img src="{{asset('frontend/images/newimages/bg-page.jpg')}}" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="heading-page-content">
                    <div class="au-page-title">
                        <h1>All Courses</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('frontend_index')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Courses</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Course Page -->
        <section class="courses-page section-padding-large section-padding_course">
            <div class="container">
                <div class="row">

                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="courses-content">
                            <div class="au-sorting display-flex">
                                <div class="filter-layout">
                                    <ul class="nav nav-tabs filter-courses display-flex-center" id="filter-courses" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true"><i class="la la-th-large"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="la la-list"></i></a>
                                        </li>
                                    </ul>
                                    <p class="woocommerce-result-count">@lang('tr.All courses')</p>
                                </div>

                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="gid-tab">
                                    <div class="row">
                                        @foreach($data['course'] as $key => $row)
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <article class="item">
                                                <div class="item-thumb">
                                                    <a href="#">
                                                        <img src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{ $row->image }}" alt="Content Marketing" class="courses_imaages_2"/>

                                                </a>
                                                    <div class="feadtured-course-small">
                                                        <a href="#">
                                                            <img src="{{ URL::to('/') }}/backend/dashboard_images/instructors/{{$row->instructor->image }}" class="img-thumbnail" width="200" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <a href="}" class="teacher">{{ $row->instructor->en_fname}}</a>
                                                    <h3 class="title">
                                                        <a href="{{route('course_details',$row->id )}}">{{ $row->topic}}</a>
                                                    </h3>
                                                    <p class="course-desc">
                                                        {{ $row->description}}
                                                    </p>
                                                    <div class="desc display-flex">
                                                        <div class="comments-students">
                                                            <a href="#" class="comments"><i class="fas fa-user"></i>35 Students</a>
                                                            <a href="#" class="students"><i class="fas fa-book"></i>20 Lessons</a>
                                                        </div>
                                                        <span class="price notfree">{{ $row->price}}$</span>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>


                                            @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                                    @foreach($data['course'] as $key => $row)
                                    <article class="item listing">
                                        <div class="item-thumb">
                                            <a href="{{route('course_details',$row->id )}}">
                                                <img src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{ $row->image }}" alt="Web Design For Usability" class="list_images">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="{{route('course_details',$row->id )}}">{{ $row->topic}}</a>
                                            </h3>
                                            <div class="feadtured-course-small">
                                                <a href="#" class="teacher">
                                                    <img src="{{ URL::to('/') }}/backend/dashboard_images/instructors/{{$row->instructor->image }}" alt="Charles Russell">
                                                    <span>{{ $row->instructor->en_fname}}</span>
                                                </a>
                                            </div>
                                            <p class="course-desc">
                                                {{ $row->description}}                                            </p>
                                            <div class="desc display-flex">
                                                <div class="comments-students">
                                                    <a href="#" class="comments"><i class="fas fa-user"></i>35 Students</a>
                                                    <a href="#" class="students"><i class="fas fa-book"></i>20 Lessons</a>
                                                </div>
                                                <span class="price notfree">{{ $row->price}}$</span>
                                            </div>
                                        </div>
                                    </article>

                                    @endforeach
                                </div>
                            </div>
{{--                            <div class="pagination">--}}
{{--                                <ul class="page-numbers">--}}
{{--                                    <li><span aria-current="page" class="page-numbers current">01</span></li>--}}
{{--                                    <li><a class="page-numbers" href="#">02</a></li>--}}
{{--                                    <li><a class="page-numbers" href="#">03</a></li>--}}
{{--                                    <li><a class="page-numbers" href="#"><i class="la la-angle-right"></i></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                    </div>


             {{--                    ----categories--------------}}
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="right-sidebar">
                            <div class="widget_search">

                            </div>
                            <div class="widget_product_categories">
                                <div class="widget-title">
                                    <h2>Categories</h2>
                                </div>
                                <ul>
                                    @foreach($data['Categories'] as $key => $row)
                                    <li><i class="la la-pencil icons_course"></i>{{ $row->name }}</li>

                                        @endforeach
                                </ul>
                            </div>

{{--                                  subscribers    --}}
                            <div class="widget_signupform">
                                <div class="sign-up-form">
                                    <div class="form-heading">
                                        <h3>
                                            Booking for Favourit Courses
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
                                        <div class="form-group">
                                            <select name="course" id="course" placeholder="Courses ">
                                                <option  class="options" value=""> Select your Course </option>
                                                <option  class="options" value="UI Design"> UI Design</option>
                                                <option  class="options" value="UX Design"> UX Design</option>
                                                <option  class="options" value=" HTML"> HTML</option>
                                                <option class="options" value="CSS"> CSS </option>
                                            </select>
                                        </div>
                                        <input type="submit" class="submit au-btn-hover" value="Subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection