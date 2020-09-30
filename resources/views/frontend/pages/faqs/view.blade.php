@extends('frontend.layouts.master')
@section('title',__('tr.FAQS'))
@section('content')



    <main>
        <!-- Heading Page -->
        <section class="heading-page">
            <img src="{{asset('frontend/images/newimages/bg-page.jpg')}}" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="heading-page-content">
                    <div class="au-page-title">
                        <h1>@lang('FAQS') </h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> @lang('FAQS')</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- FAQS -->
        <section class="featured section-padding-large">
            <div class="container">
                <div class="fqa">
                    <div class="section-title section-title-center">
                        <h2>FAQ</h2>
                    </div>
                    <div class="fqa-content">
                        @foreach($faq_data as $key => $row)
                        <ul id="accordion">

                            <li class="card">
                                <div class="card-header" id="headingOne">
                                    <div class="title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                                        {{ $row->title }}
                                    </div>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body content">
                                        {{ $row->description}}
                                    </div>
                                </div>
                            </li>


                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>





        <section class="gallery">
            <div class="container-fluid">
                <div class="gallery-content gallery-hover">
                    <div class="row">
                        <div class="col px-0">
                            <figure>
                                <a href="images/newimages/home1-blog-1.jpg" class="grouped_gallery" data-fancybox="gallery">
                                    <img class="prtofolio_images" src="images/newimages/home1-blog-1.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="col px-0">
                            <figure>
                                <a href="images/newimages/home1-blog-2.jpg" class="grouped_gallery" data-fancybox="gallery">
                                    <img class="prtofolio_images" src="images/newimages/home1-blog-2.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="col px-0">
                            <figure>
                                <a href="images/newimages/home1-course-1.jpg" class="grouped_gallery" data-fancybox="gallery">
                                    <img class="prtofolio_images" src="images/newimages/home1-course-1.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="col px-0">
                            <figure>
                                <a href="images/newimages/home1-course-2.jpg" class="grouped_gallery" data-fancybox="gallery">
                                    <img class="prtofolio_images" src="images/newimages/home1-course-2.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="col px-0">
                            <figure>
                                <a href="images/newimages/home1-course-3.jpg" class="grouped_gallery" data-fancybox="gallery">
                                    <img class="prtofolio_images" src="images/newimages/home1-course-3.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>



@endsection