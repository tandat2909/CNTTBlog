<nav class="navbar navbar-expand-lg menu_one dark_menu sticky-nav">
    <div class="container                                                                                                                                      ">
        <a class="navbar-brand header_logo" href="/">
            <img class="first_logo sticky_logo main_logo" src="/img/logo.png" srcset="/img/logo-2x.png 2x" alt="logo">
            <img class="white_logo" src="/img/logo-w.png" srcset="/img/logo-w2x.png 2x" alt="logo">
        </a>
        <div class="search-input">
            <ion-icon class="search-icon" name="search-outline"></ion-icon>
            <input type="text" placeholder="Search..." value="" class="">
        </div>
        <div class="mobile-dark-mode d-lg-none">
            <label for="something" class="tab-btn tab-btns">
                <ion-icon class="light-mode" name="contrast"></ion-icon>
            </label>
            <label for="something" class="tab-btn">
                <ion-icon class="dark-mode" name="contrast-outline"></ion-icon>
            </label>
        </div>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span>
                </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav menu ml-auto">
                <li class="nav-item active ">
                    <a href="{{URL::route('index')}}" class="nav-link dropdown-toggle">Home</a>

                </li>

                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="forums.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Forum
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                       data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li class="nav-item"><a href="{{URL::route('catalog_posts',['category_url_rewrite'=>$category->url_rewrite])}}" class="nav-link">{{$category->title}}</a></li>
                        @endforeach

                    </ul>
                </li>

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown submenu">

                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a  class="nav-link"  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
            <div class="right-nav">
                <a class="nav_btn tp_btn" href="https://is.gd/nDvqm2" target="_blank">Get Docy</a>
                <a class="px-2 ml-3" href="#" title="Subscribe to the newsletter">
                    <ion-icon name="mail"></ion-icon>
                </a>
                <a class="px-2" href="#" title="RSS feed">
                    <ion-icon name="logo-rss"></ion-icon>
                </a>
                <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                    <label for="something" class="tab-btn tab-btns">
                        <ion-icon class="light-mode" name="contrast"></ion-icon>
                    </label>
                    <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                    <label for="something" class="tab-btn">
                        <ion-icon class="dark-mode" name="contrast-outline"></ion-icon>
                    </label>
                </div>
            </div>
        </div>
    </div>
</nav>