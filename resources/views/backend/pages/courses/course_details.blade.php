@extends('frontend.layouts.master')
@section('title',__('tr.course_details'))
@section('content')

    <main>
        <!-- Heading Page -->
        <section class="heading-page">
            <img src="{{asset('frontend/images/newimages/bg-page.jpg')}}" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="heading-page-content">
                    <div class="au-page-title">
                        <h1>@lang('tr.course_details')</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('frontend_index')}}">@lang('tr.Home')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('tr.course_details')
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <section class="single-course section-padding-large courses_detailss">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 single-course-content">
                        <div class="single-title">
                            <h1>{{ $data['currentcourse']->topic }}</h1>
                            <span class="price notfree">{{ $data['currentcourse']->price }}$</span>
                        </div>
                        <div class="single-course-info">
                            <figure class="single-course-images">
                                <img src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{ $data['currentcourse']->image }}" class="course_details_img" alt="Content Marketing">
                            </figure>
                            <div class="course-teacher-cat display-flex">
                                <div class="teacher-cat">
                                    <ul class="display-flex">
                                        <li class="display-flex">
                                            <a href="#">
                                                <img src="{{ URL::to('/') }}/backend/dashboard_images/instructors/{{ $data['currentcourse']->instructor->image }}" alt="Sofia Robinson">
                                            </a>
                                            <div class="teacher-cat-item">
                                                <span>Instructor:</span>
                                                <a href="#">{{ $data['currentcourse']->instructor->en_fname }}</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="teacher-cat-item">
                                                <span>Caregories</span>
                                                <a href="#">{{ $data['currentcourse']->Categories->en_name }}</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="teacher-cat-item">
                                                <span>Reviews</span>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <a href="#" class="au-btn au-btn-hover">Book This Courses</a> -->
                            </div>
                        </div>
                        <div class="single-course-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true"><i class="fas fa-user"></i>Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="curriculum-tab" data-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false"><i class="fas fa-bookmark"></i>Section</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false"><i class="fas fa-star"></i>Review</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="course-overview">
                                        <div class="course-desc">
                                            <h4 class="course-tab-title">{{ $data['currentcourse']->topic }}</h4>
                                            <p class="course-desc-content">
                                                {{ $data['currentcourse']->description }}
                                            </p>

                                        </div>
                                    </div>
                                    <!-- FQA -->

                                </div>
                                <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                                    <ul id="curriculum-content" class="curriculum-content">
                                        <li class="card active">
                                            <div class="card-header" id="headingcurriculumOne">
                                                <div class="title" data-toggle="collapse" data-target="#curriculumOne" aria-expanded="true" aria-controls="curriculumOne" role="button">
                                                    Section 1: Getting Started
                                                </div>
                                                <span>0/5</span>
                                            </div>

                                            <div id="curriculumOne" class="collapse show" aria-labelledby="headingcurriculumOne" data-parent="#curriculum-content">
                                                <div class="card-body content">
                                                    <ul>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="fas fa-play-circle"></i>Welcome To Course Content Marketing! <span class="price">Free</span>
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>05:20</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="fas fa-play-circle"></i>What is Content Writing?
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>02:00</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="fas fa-play-circle"></i>What Does it Take to Become a Content Writer?
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>04:10</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="far fa-file"></i>Brainstorming Checklist
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>03:20</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="fas fa-play-circle"></i>Understanding Your Audience
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>06:30</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="card">
                                            <div class="card-header" id="headingcurriculumTwo">
                                                <div class="title" data-toggle="collapse" data-target="#curriculumTwo" aria-expanded="true" aria-controls="curriculumTwo" role="button">
                                                    Section 2: Creative Content Ideas
                                                </div>
                                                <span>0/8</span>
                                            </div>

                                            <div id="curriculumTwo" class="collapse show" aria-labelledby="headingcurriculumTwo" data-parent="#curriculum-content">
                                                <div class="card-body content">
                                                    <ul>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="far fa-file"></i>Powerful Keyword Research Tools
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>02:00</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="fas fa-play-circle"></i>How to Create Valuable Content?
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>04:00</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="fas fa-play-circle"></i>Examples of How to Use Tone in Your Writing
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>06:25</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="far fa-file"></i>How to Improve Flow in Your Content
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>04:20</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="fas fa-play-circle"></i>Webmaster Guidelines
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>05:40</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="fas fa-play-circle"></i>Generalist vs. Specialist
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>04:00</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="far fa-file"></i>Proximity Research
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>02:15</span>
                                                        </li>
                                                        <li class="display-flex">
                                                            <a href="#">
                                                                <span>
                                                                    <i class="fas fa-puzzle-piece"></i>The Course Quiz
                                                                </span>
                                                            </a>
                                                            <span class="lesson-time"><i class="far fa-clock"></i>6 Question</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                    <div class="review-content">
                                        <div class="average-rating">
                                            <span class="total-rating">5</span>
                                            <div class="rating-star">
                                                <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                            </div>
                                            <p class="desc">Average Rating</p>
                                        </div>
                                        <div class="rating-breakdown js-waypoint">
                                            <div class="progress-bar">
                                                <div class="progress-box">
                                                    <div class="au-progress au-progress-2">
                                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="100">
                                                            <span class="au-progress-star">5 Stars</span>
                                                            <span class="au-progress-total"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <div class="au-progress au-progress-2">
                                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="0">
                                                            <span class="au-progress-star">3 Stars</span>
                                                            <span class="au-progress-total">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <div class="au-progress au-progress-2">
                                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="0">
                                                            <span class="au-progress-star">3 Stars</span>
                                                            <span class="au-progress-total"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <div class="au-progress au-progress-2">
                                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="0">
                                                            <span class="au-progress-star">2 Stars</span>
                                                            <span class="au-progress-total"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-box">
                                                    <div class="au-progress au-progress-2">
                                                        <div class="au-progress-bar" role="progressbar" data-transitiongoal="0">
                                                            <span class="au-progress-star">1 Stars</span>
                                                            <span class="au-progress-total"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-comments">
                                        <h3 class="title">
                                            Our Students Said:
                                        </h3>
                                        <div class="media">
                                            <a class="mr-20" href="#">
                                                <img src="{{asset('frontend/images/newimages/person_7.jpg')}}" alt="user Image">
                                            </a>
                                            <div class="media-body">
                                                <div class="info">
                                                    <div class="title-desc">
                                                        <h5 class="mt-0 title">
                                                            Lauren Goodwin - <span> Great Course</span>
                                                        </h5>
                                                        <div class="rating-star">
                                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                        </div>
                                                        <p class="desc">
                                                            Lulla pharetra diam sit amet. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidu ornare. At imperdiet dui accumsan sit amet nulla facilisi. Dui vivamus arcu felis biben.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="mr-20" href="#">
                                                <img src="{{asset('frontend/images/newimages/person_8.jpg')}}" alt="user Image">
                                            </a>
                                            <div class="media-body">
                                                <div class="info">
                                                    <div class="title-desc">
                                                        <h5 class="mt-0 title">
                                                            Monica Morgan - <span>Customer Support  </span>
                                                        </h5>
                                                        <div class="rating-star">
                                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                            <span class="star-rate rated"><i class="fas fa-star"></i></span>
                                                        </div>
                                                        <p class="desc">
                                                            Praesent tristique magna sit amet purus gravida quis. Enim neque volutpat ac tincidunt. Eget alique nibh praesent tristique magna sit amet purus.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="right-sidebar">
                            <div class="widget-featured-course">
                                <div class="widget-title">
                                    <h2>Featured Course</h2>
                                </div>
                                <ul>
                                    <li class="display-flex">
                                        <span><i class="fas fa-clock"></i>Duration</span>
                                        <span>2 Section</span>
                                    </li>
                                    <li class="display-flex">
                                        <span><i class="fas fa-book"></i>Lessons</span>
                                        <span>08</span>
                                    </li>

                                    <li class="display-flex">
                                        <span><i class="fas fa-puzzle-piece"></i>Quizzes</span>
                                        <span>01</span>
                                    </li>
                                    <li class="display-flex">
                                        <span><i class="fas fa-users"></i>Students</span>
                                        <span>42</span>
                                    </li>
                                    <li class="display-flex">
                                        <span><i class="fas fa-check-square"></i>Assessments</span>
                                        <span>Yes</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_lastest_entries">
                                <div class="widget-title">
                                    <h2>Other Courses</h2>
                                </div>
                                <ul>

                                    @foreach($data['allcourses'] as $key => $row)

                                        @if ($row->id !=$data['currentcourse']->id)

                                        <li>
                                        <figure>
                                            <a href="#"><img src="{{ URL::to('/') }}/backend/dashboard_images/courses/{{ $row->image }}" alt="Web Design For Usability"></a>
                                        </figure>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="#">{{$row->topic}}</a>
                                            </h3>
                                            <span class="price free">{{$row->price}}</span>
                                        </div>
                                    </li>

                                        @endif
                                        @endforeach

                                </ul>
                            </div>

                            <div class="banner">
                                <img src="{{asset('frontend/images/newimages/footer-gallery-3.jpg')}}" alt="">
                                <div class="banner-content position-center">
                                    <h5 class="title">
                                        Get this Courses!
                                    </h5>
                                    <a href="#" class="au-btn au-btn-hover">Book It Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    @endsection