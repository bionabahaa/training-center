<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">


        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('dahboard')}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-suitcase"></i><span class="m-menu__link-text">dashboard</span></a></li>
            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('dahboard')}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-suitcase"></i><span class="m-menu__link-text">User Management</span></a></li>


            <li class="m-menu__section m-menu__section--first">

                <h4 class="m-menu__section-text">USERS</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>
            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('subscribers')}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-share"></i><span class="m-menu__link-text">subscribers</span></a></li>

            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('employees')}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic"></i><span class="m-menu__link-text">Empoylee</span></a></li>
            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('instructors')}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-share"></i><span class="m-menu__link-text">instructors</span></a></li>




            <li class="m-menu__section m-menu__section--first">
                <h4 class="m-menu__section-text">STUDENTS</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">STUDENTS</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">student</span></span></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('students')}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-light"></i><span class="m-menu__link-text"> Students</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('bookthecourse')}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-light"></i><span class="m-menu__link-text"> book the course</span></a></li>

{{--                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-cogwheel"></i><span class="m-menu__link-text">Attendance</span></a></li>--}}
{{--                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-lifebuoy"></i><span class="m-menu__link-text">Grades</span></a></li>--}}

                    </ul>
                </div>
            </li>
            </li>




            <li class="m-menu__section m-menu__section--first">
                <h4 class="m-menu__section-text">DEPARTMENTS</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">COURSES</span><i
                            class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">courses</span></span></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('categories')}}" class="m-menu__link "><span class="m-menu__link-text">All Categories</span></a></li>

{{--                        <li class="m-menu__item " aria-haspopup="true"><a href="" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">All Categories</span></a></li>--}}

                        <li class="m-menu__item " aria-haspopup="true"><a href="{{route('courses')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">All Courses</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('subjects')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">subjects</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('sessions')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Sessions</span></a></li>

{{--                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('quizzes')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Quizzes</span></a></li>--}}
{{--                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('exams')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Exam</span></a></li>--}}

                    </ul>
                </div>
            </li>
            </li>



{{--                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-graphic-1"></i><span--}}
{{--                            class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Setting</span> </span> </span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>--}}
{{--                    <ul class="m-menu__subnav">--}}
{{--                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Setting</span> <span--}}
{{--                                                class="m-menu__link-badge"><span class="m-badge m-badge--accent">3</span></span> </span></span></span></li>--}}
{{--                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Reports</span></a></li>--}}
{{--                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__link-text">Cases</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>--}}
{{--                                <ul class="m-menu__subnav">--}}
{{--                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Pending</span></a></li>--}}
{{--                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Urgent</span></a></li>--}}
{{--                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Done</span></a></li>--}}
{{--                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Archive</span></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Profile</span></a></li>--}}
{{--                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">change password</span></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}



{{--            <li class="m-menu__section ">--}}
{{--                <h4 class="m-menu__section-text">Accounting</h4>--}}
{{--                <i class="m-menu__section-icon flaticon-more-v2"></i>--}}
{{--            </li>--}}


{{--            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-network"></i><span class="m-menu__link-text">Earnings</span></a></li>--}}
{{--            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-network"></i><span class="m-menu__link-text">Expense</span></a></li>--}}
{{--            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-network"></i><span class="m-menu__link-text">Accounting</span></a></li>--}}


            {{--            <li class="m-menu__section ">--}}
{{--                <h4 class="m-menu__section-text">System</h4>--}}
{{--                <i class="m-menu__section-icon flaticon-more-v2"></i>--}}
{{--            </li>--}}

            </li>


            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-settings"></i><span class="m-menu__link-text">Feedback</span></a></li>

            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-settings"></i><span class="m-menu__link-text">Follow Up</span></a></li>
            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-settings"></i><span class="m-menu__link-text">Inventory</span></a></li>
            <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-settings"></i><span class="m-menu__link-text">Notifications</span></a></li>





            <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Cms</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-graphic-1"></i><span
                            class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">WEBSITE</span> </span> </span></span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" m-menu-link-redirect="1"><span class="m-menu__link"><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Support</span> <span
                                                class="m-menu__link-badge"><span class="m-badge m-badge--accent">3</span></span> </span></span></span></li>

                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover" m-menu-link-redirect="1"><a href="javascript:;" class="m-menu__link m-menu__toggle"><span class="m-menu__link-text">PAGES</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Home Page</span></a></li>

                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('about_us')}}" class="m-menu__link "><span class="m-menu__link-text">About Us</span></a></li>
                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('events')}}" class="m-menu__link "><span class="m-menu__link-text">Events</span></a></li>

                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('blog')}}" class="m-menu__link "><span class="m-menu__link-text">Blogs</span></a></li>

                                    <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('contact_us')}}" class="m-menu__link "><span class="m-menu__link-text">Contact Us</span></a></li>



                                </ul>
                            </div>
                        </li>


                        <li class="m-menu__section ">
                            <h4 class="m-menu__section-text">More Sections</h4>
                            <i class="m-menu__section-icon flaticon-more-v2"></i>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('faqs')}}" class="m-menu__link "><span class="m-menu__link-text">Faqs</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('clients')}}" class="m-menu__link "><span class="m-menu__link-text">Clients</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('comments')}}" class="m-menu__link "><span class="m-menu__link-text">comments</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('slider')}}" class="m-menu__link "><span class="m-menu__link-text">sliders</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('gallery')}}" class="m-menu__link "><span class="m-menu__link-text">gallery</span></a></li>




                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('soicalmedia_index')}}" class="m-menu__link "><span class="m-menu__link-text">Social Media</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('newsletters')}}" class="m-menu__link "><span class="m-menu__link-text">NewsLetters</span></a></li>

                        <li class="m-menu__item " aria-haspopup="true" m-menu-link-redirect="1"><a href="{{route('systems_index')}}" class="m-menu__link "><span class="m-menu__link-text">Settings</span></a></li>
                    </ul>
                </div>
            </li>

        </ul>










    </div>

    <!-- END: Aside Menu -->
</div>

<!-- END: Left Aside -->