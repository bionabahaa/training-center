@extends('frontend.layouts.master')
@section('title',__('tr.Events'))
@section('content')


<main>
        <!-- Heading Page -->
        <section class="heading-page">
            <img src="{{asset('frontend/images/newimages/bg-page.jpg')}}" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="heading-page-content">
                    <div class="au-page-title">
                        <h1>@lang('tr.Events Details')</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('frontend_index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('view_events')}}">All Events</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Events Details</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <section class="single-event section-padding-large">
            <div class="container">
                <div class="single-title">

                    <h1>{{ $data['currentevents']->title }}</h1>
                    <span class="price notfree">{{$data['currentevents']->status }}</span>

                </div>
                <div class="single-event-content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                            <figure class="events-image">
                                <img src="{{ URL::to('/') }}/frontend/website_images/events/{{ $data['currentevents']->image }}" class="event_details_images" alt="Creative Development">
                            </figure>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="event-info">
                                        <h2 class="event-title">Events Info:</h2>
                                        <ul>
                                            <li>
                                                <i class="far fa-calendar-alt"></i><span>Date:</span>{{$data['currentevents']->date }}
                                            </li>
                                            <li>
                                                <i class="far fa-clock"></i><span>Time: </span>{{$data['currentevents']->time }}
                                            </li>

                                            <li>
                                                <i class="fas fa-map-marker-alt"></i><span>Address: </span>{{$data['currentevents']->address }}
                                            </li>
                                            <li>
                                                <i class="fas fa-mobile-alt"></i><span>Phone: </span>{{$data['currentevents']->phone }}
                                            </li>
                                            <li>
                                                <i class="far fa-envelope"></i><span>Email: </span>{{$data['currentevents']->email }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="event-desc">
                                        <h2 class="event-title">Description:</h2>
                                        <p>
                                            {{$data['currentevents']->description }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">--}}
{{--                            <div class="map-wrapper js-google-map" data-makericon="images/icon/icon-map-blue.png" data-makers='[["Smartedu", "Now that you visited our website,<br> how about checking out our office too?", 40.717209, -74.005165]]'>--}}
{{--                                <div class="map__holder js-map-holder" id="map"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </div>






                  
                    <div class="events-related display-flex background-grey">
                        <article class="item item-prev">
                            <figure>
                                <a href="single-event.html">
                                    <img src="{{ URL::to('/') }}/frontend/website_images/events/{{ $data['currentevents']->image }}" alt="AI Development Day">
                                </a>
                            </figure>
                            <div class="info">
                                <h4 class="desc">Previous</h4>
                                <h3 class="title">
                                    <a href="single-event.html">{{ $data['currentevents']->title }}</a>
                                </h3>
                            </div>
                        </article>
                        <article class="item item-next">
                            <figure>
                                <a href="single-event.html">
                                    <img src="{{ URL::to('/') }}/frontend/website_images/events/{{ $data['currentevents']->image }}" alt="Technology Connection">
                                </a>
                            </figure>
                            <div class="info">
                                <h4 class="desc">Next</h4>
                                <h3 class="title">
                                    <a href="single-event.html">{{ $data['currentevents']->title }}</a>
                                </h3>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </section>
    </main>

@endsection