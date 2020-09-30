<div class="header-bottom hidden-tablet-landscape" id="js-navbar-fixed">
    <div class="container">
        <div class="header-bottom">
            <div class="header-bottom-content display-flex">
                <div class="logo">
                    <a href="index2.html">
                        <img src="{{asset('frontend/images/logo.png')}}" alt="SmartEdu">
                    </a>
                </div>
                <div class="menu-search display-flex">
                    <nav class="menu">
                        <div>
                            <ul class="menu-primary">
                                <li class="menu-item curent-menu-item">
                                    <a href="{{route('frontend_index')}}">@lang('tr.Home')</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('view_about_us')}}">@lang('tr.About us')</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('view_courses')}}">@lang('tr.Courses')</a>
                                </li>

                                <li class="menu-item">
                                    <a href="{{route('view_events')}}">@lang('tr.Events')</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('view_blog')}}">@lang('tr.News')</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('create_contact_us')}}">@lang('tr.Contact us')</a>
                                </li>


                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>