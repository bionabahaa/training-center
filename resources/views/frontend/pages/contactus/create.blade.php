@extends('frontend.layouts.master')
@section('title',__('tr.Contact us'))
@section('content')


    <main>
        <!-- Heading Page -->
        <section class="heading-page">
            <img src="{{asset('frontend/images/newimages/bg-page.jpg')}}" alt="">
            <div class="overlay"></div>
            <div class="container">
                <div class="heading-page-content">
                    <div class="au-page-title">
                        <h1>Contact Us</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index2.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

        <!-- Contact Info -->
        <section class="contact-info-two section-padding-large">
            <div class="container">
                <div class="contact-info-two-content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <span class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </span>
                                <div class="info">
                                    <h3 class="title">Phone Number</h3>
                                    <span class="contact-phone">+1 666-777-2222</span>
                                    <span class="contact-phone">+1 666-777-8888</span>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <span class="icon">
                                    <i class="far fa-envelope"></i>
                                </span>
                                <div class="info">
                                    <h3 class="title">Email Address</h3>
                                    <a href="mailto:info@smartedu.com" class="email">info@smartedu.com</a>
                                    <a href="mailto:Contact@smartedu.com" class="email">Contact@smartedu.com</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <span class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                <div class="info">
                                    <h3 class="title">Address Location</h3>
                                    <span class="address">SmartEdu, 20th St, New York, NY 10003</span>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <article class="item">
                                <span class="icon">
                                    <i class="far fa-clock"></i>
                                </span>
                                <div class="info">
                                    <h3 class="title">Work Time</h3>
                                    <span>Weekdays: 9:00am - 6:00pm</span>
                                    <span>Sat - Sun: 9:00am - 5:00pm</span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact us -->
        <section class="contact-us contact-us-two">
            <div class="container-fluid">
                <div class="contact-us-content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12-col-sm-12 col-12 px-0">
                            <div class="contact-form">

                                <h3 class="contact-title">
                                    Get In Touch
                                </h3>
                                <form method="POST" action="{{ route('store_contact_us') }}" class="form-contact js-contact-form">
                                    <div class="form-input">
                                        <div class="row">

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="wrap-group">
                                                    <input type="text" en_name="name" placeholder="@lang('tr.Enter name')*" required>
                                                </div>
                                            </div>

                                            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="wrap-group">
                                                    <input type="text" ar_name="name" placeholder="@lang('tr.Enter Arabic name')*" required>
                                                </div>
                                            </div> -->

                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="wrap-group">
                                                    <input type="email" name="email" placeholder="@lang('tr.Enter Email')*" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- <div class="wrap-group">
                                        <textarea name="en_message" id="en_message" cols="10" rows="10"  placeholder="@lang('tr.Enter English message')" required></textarea>

                                    </div> -->


                                    <div class="wrap-group">
                                        <textarea name="ar_message" id="ar_message" cols="10" rows="10"  placeholder="@lang('tr.Enter  message')" required></textarea>

                                    </div>


                                    <div class="wrap-group">
                                        <input type="submit" class="btn-submit" name="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12-col-sm-12 col-12 px-0">
                            <div class="map-wrapper js-google-map" data-makericon="images/icon/icon-map-blue.png" data-makers='[["Smartedu", "Now that you visited our website,<br> how about checking out our office too?", 40.717209, -74.005165]]'>
                                <div class="map__holder js-map-holder" id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection