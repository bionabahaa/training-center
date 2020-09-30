<!-- Footer page -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-info">
                        <div class="footer-logo">
                            <a href="index2.html"><img src="{{asset('frontend/images/logo-white.png')}}" alt="SmartEdu"></a>
                        </div>
                        <p class="footer-intro">
                            Proin libero nunc conseq interdum varius sit amet. Metus ali elei mi in nulla posuere. Tortor preti viverra suspendisse potenti nul ac.
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
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-menu">
                        <div class="footer-title">
                            <h4>Link Useful</h4>
                        </div>
                        <div class="footer-link-menu">
                            <ul>
                                <li><a href="{{route('view_courses')}}"><i class="la la-angle-right"></i>Courses</a></li>
                                <li><a href="{{route('view_instructors')}}"><i class="la la-angle-right"></i>Instructors</a></li>
                                <li><a href="{{route('view_faqs')}}"><i class="la la-angle-right"></i> FAQS</a></li>
{{--                            <li><a href="#"><i class="la la-angle-right"></i>Terms </a></li>--}}

                            </ul>
                            <ul>
                                <li><a href="{{route('view_about_us')}}"><i class="la la-angle-right"></i>About Us</a></li>
{{--                                <li><a href="#"><i class="la la-angle-right"></i>Partner</a></li>--}}
                                <li><a href="{{route('view_blog')}}"><i class="la la-angle-right"></i>Blogs</a></li>
                                <li><a href="{{route('view_events')}}"><i class="la la-angle-right"></i>Events</a></li>
                                <li><a href="{{route('create_contact_us')}}"><i class="la la-angle-right"></i>Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-gallery">
                        <div class="footer-title">
                            <h4>Gallery</h4>
                        </div>
                        <div class="footer-gallery-content">
                            <figure>

                                <a href="{{asset('frontend/images/newimages/course-2-400x300.jpg')}}" class="grouped_elements" data-fancybox="gallery">
                                    <img src=" {{asset('frontend/images/newimages/course-2-400x300.jpg')}}" alt="" class="footer_images">
                                </a>
                            </figure>
                            <figure>
                                <a href="{{asset('frontend/images/newimages/course-4-400x300.jpg')}}" class="grouped_elements" data-fancybox="gallery">
                                    <img src="{{asset('frontend/images/newimages/course-4-400x300.jpg')}}" alt="" class="footer_images">
                                </a>
                            </figure>
                            <figure>
                                <a href="{{asset('frontend/images/newimages/course-5-400x300.jpg')}}" class="grouped_elements" data-fancybox="gallery">
                                    <img src="{{asset('frontend/images/newimages/course-5-400x300.jpg')}}" alt="" class="footer_images">
                                </a>
                            </figure>
                            <figure>

                                <a href="{{asset('frontend/images/newimages/course-6.jpg')}}" class="grouped_elements" data-fancybox="gallery">
                                    <img src="{{asset('frontend/images/newimages/course-6.jpg')}}" alt="" class="footer_images">
                                </a>
                            </figure>
                            <figure>

                                <a href="{{asset('frontend/images/newimages/course-1-400x300.jpg')}}" class="grouped_elements" data-fancybox="gallery">
                                    <img src="{{asset('frontend/images/newimages/course-1-400x300.jpg')}}" alt="" class="footer_images">
                                </a>
                            </figure>
                            <figure>

                                <a href="{{asset('frontend/images/newimages/footer-gallery-4.jpg')}}" class="grouped_elements" data-fancybox="gallery">
                                    <img src="{{asset('frontend/images/newimages/footer-gallery-4.jpg')}}" alt="" class="footer_images">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-contact">
                        <div class="footer-title">
                            <h4>Infomation</h4>
                        </div>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>SmartEdu, 20th St, New York, NY 10003</span>
                            </li>
                            <li class="footer-phone">
                                <i class="fas fa-mobile-alt"></i>
                                <span>+1 333-444-5555</span>
                            </li>
                            <li class="footer-fax">
                                <i class="fas fa-fax"></i>
                                <span>+1 333-444-5555</span>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <span>info@smartedu.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p class="copyright">Copyright @ 2019 <span> <a href="http://www.quantumsit.com/"> Quantumsit </a> </span>. <a class="au-btn-buy" href="http://www.quantumsit.com/">Get The Template</a></p>
            </div>
        </div>
    </div>
</footer>