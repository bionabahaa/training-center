<div class="header-top hidden-tablet-landscape">
    <div class="container">
        <div class="header-top-content display-flex">
            <div class="header-top-info">
                <div class="header-socials">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <a href="mailto:info@smartedu.com" class="email"><i
                            class="far fa-envelope"></i>info@smartedu.com</a>
                <a href="#" class="telephone"><i class="fas fa-mobile-alt"></i>+1 222-333-9999</a>
            </div>
            <div class="header-top-account">
                @if(\Lang::getLocale() == 'ar')
                    <a class="language_btn" href="{{ route('dashboard_changelang','en') }}" class ="lang_btn">@lang('tr.English')</a>
                @else
                    <a class="language_btn" href="{{ route('dashboard_changelang','ar') }}" class ="lang_btn" >@lang('tr.Arabic')</a>
                @endif
                <a href="#" class="signup"><i class="fas fa-edit"></i>Sign Up</a>
                <a href="#" class="login">Sign In</a>

            </div>
        </div>
    </div>
</div>