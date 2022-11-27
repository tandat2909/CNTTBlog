<nav class="navbar navbar-expand-lg menu_one dark_menu sticky-nav">
    <div class="container                                                                                                                                      ">
        <a class="navbar-brand header_logo" href="/">
            <img class="first_logo sticky_logo main_logo" src="/img/logo.png" srcset="/img/logo-2x.png 2x" alt="logo">
            <img class="white_logo" src="/img/logo-w.png" srcset="/img/logo-w2x.png 2x" alt="logo">
        </a>
        <div class="search-input">
            <ion-icon class="search-icon" name="search-outline"></ion-icon>
            <form action="{{URL::route('searchForum')}}">
                <input type="text" placeholder="Search..." name="search" value="{{request("search")}}" class="">
            </form>

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
                <li class="nav-item dropdown submenu">
                    <a href="{{URL::route('index')}}" class="nav-link dropdown-toggle">Home</a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="index.html" class="nav-link">Creative Helpdesk</a></li>
                        <li class="nav-item"><a href="index-multi.html" class="nav-link">Multi Helpdesk</a></li>
                        <li class="nav-item"><a href="index-classic.html" class="nav-link">Classic Helpdesk</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu mega_menu tab-demo">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="true" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="row">
                                <div class="col-lg-5 tabHeader">
                                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <li class="nav-item active">
                                            <a class="nav-link" id="v-pills-doc-tab" data-toggle="pill" href="#v-pills-doc" role="tab" aria-controls="v-pills-doc" aria-selected="true">Doc Archives</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="v-pills-code-tab" data-toggle="pill" href="#v-pills-code" role="tab" aria-controls="v-pills-code" aria-selected="false">Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="v-pills-layout-tab" data-toggle="pill" href="#v-pills-layout" role="tab" aria-controls="v-pills-layout" aria-selected="false">Layouts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="v-pills-tour-tab" data-toggle="pill" href="#v-pills-tour" role="tab" aria-controls="v-pills-tour" aria-selected="false">Reference</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="v-pills-content-tab" data-toggle="pill" href="#v-pills-content" role="tab" aria-controls="v-pills-content" aria-selected="false">Content</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="v-pills-pages-tab" data-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false">Other Pages</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-7">
                                    <div class="tab-content tabContent" id="v-pills-tabContent">
                                        <div class="tab-pane fade active show" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list">
                                                    <li> <a href="doc-main.html"> Doc Topics </a> </li>
                                                    <li> <a href="archive-doc-single.html"> Single Product </a> </li>
                                                    <li> <a href="archive-doc-multi.html"> Multi Products </a> </li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="doc-main.html">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="doc-main.html">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-code" role="tabpanel" aria-labelledby="v-pills-code-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list">
                                                    <li><a href="doc-element-tab.html">Tabs</a></li>
                                                    <li><a class="active" href="doc-element-accordion.html">Accordion</a></li>
                                                    <li><a href="doc-element-notice.html">Notice</a></li>
                                                    <li><a href="doc-content-tables.html">Tables</a></li>
                                                </ul>
                                                <ul class="list-unstyled tab_list">
                                                    <li><a href="doc-element-hotspots.html">Image Hotspots</a></li>
                                                    <li><a href="doc-element-code.html">Source Code</a></li>
                                                    <li><a href="doc-element-lightbox.html">Image Lightbox</a></li>
                                                    <li><a href="doc-ref-cheatsheet.html">Cheatsheet</a></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="doc-main.html">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-layout" role="tabpanel" aria-labelledby="v-pills-layout-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list">
                                                    <li><a href="doc-element-hotspots.html">Left Sidebar</a></li>
                                                    <li><a href="doc-content-video.html">Full-width</a></li>
                                                    <li><a href="doc-layout-banner-gradient.html">Gradient Banner</a></li>
                                                    <li><a href="doc-layout-banner-empty.html">Without Banner</a></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="#">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-tour" role="tabpanel" aria-labelledby="v-pills-tour-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list w_100">
                                                    <li><a href="doc-ref-cheatsheet.html">Cheatsheet</a></li>
                                                    <li><a href="doc-ref-footnote.html">Footnotes</a></li>
                                                    <li><a href="doc-tour.html">Interface Tour</a></li>
                                                    <li><a href="doc-ref-can-use.html">Can I Use</a></li>
                                                    <li><a href="doc-content-tooltip.html">Tooltips & Direction</a></li>
                                                    <li><a href="doc-ref-shortcuts.html">Keyboard Shortcuts</a></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="#">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-content" role="tabpanel" aria-labelledby="v-pills-content-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list">
                                                    <li><a href="doc-content-image.html">Image</a></li>
                                                    <li><a class="active" href="doc-content-tables.html">Tables</a></li>
                                                    <li><a href="doc-content-video.html">Video</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="doc-content-tooltip.html">Tooltips & Direction</a></li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="#">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
                                            <div class="d-flex">
                                                <ul class="list-unstyled tab_list">
                                                    <li> <a href="onepage.html">Onepage</a> </li>
                                                    <li> <a href="doc-main.html">Doc Topics</a></li>
                                                    <li> <a href="doc-tour.html">Cheatsheet</a> </li>
                                                    <li> <a href="doc-changelog.html">Changelog</a> </li>
                                                </ul>
                                            </div>
                                            <div class="text">
                                                <a href="#">
                                                    <p>More Categories</p>
                                                </a>
                                                <a href="doc-main.html">
                                                    <p>All docs</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="onepage.html" class="nav-link">Onepage Doc</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="forums.html" class="nav-link">Forum</a></li>
                        <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
                        <li class="nav-item"><a href="404-error.html" class="nav-link">404 Error</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu active">
                    <a class="nav-link dropdown-toggle" href="forums.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Forum
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                       data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item active"><a href="forums.html" class="nav-link">Forums Root</a></li>
                        <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                        <li class="nav-item"><a href="forum-single.html" class="nav-link">Topic Details</a></li>
                        <li class="nav-item"><a href="forum-profile.html" class="nav-link">User Profile</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown submenu">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href="blog-grid.html" class="nav-link">Extended Grid</a></li>
                        <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Grid with Sidebar</a></li>
                        <li class="nav-item"><a href="blog-list.html" class="nav-link">List with Sidebar</a></li>
                        <li class="nav-item"><a href="blog-single.html" class="nav-link">Post Details</a></li>
                        <li class="nav-item"><a href="blog-single2.html" class="nav-link">Post Details Two</a></li>
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
