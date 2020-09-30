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
                        <h1>Events</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('frontend_index')}}">@lang('tr.Home')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@lang('tr.Events')</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <section class="events-page section-padding-large" style="background: rgba(0, 0, 0, 0.16);">
            <div class="container">
                <div class="section-title section-title-center">
                    <h2 class="">@lang('tr.Up Comming Events')</h2>
                </div>

                <div class="events-content ">
                    @foreach($events_data as $key => $row)

                    <article class="item display-flex">
                        <div class="info">
                            <div class="post-date display-flex-center">
{{--                                <span class="date"> {{ $row->date }}</span>--}}
                                <span class="month"> {{ $row->date }}</span>
                            </div>
                            <div class="course-title">
                                <h3 class="title">
                                    <a href=""> {{ $row->title }}</a>
                                </h3>
                                <span class="price free"> {{ $row->status }}</span>
                            </div>
                            <div class="meta">
                                <span class="time"><i class="far fa-clock"></i> {{ $row->time }}</span>
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
                    </article>



                        @endforeach



                </div>



            </div>
        </section>
    </main>

@endsection