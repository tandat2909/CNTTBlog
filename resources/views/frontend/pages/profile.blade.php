<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Docy</title>
</head>

<body data-scroll-animation="true">
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="round_spinner">
            <div class="spinner"></div>
            <div class="text">
                <img src="img/spinner_logo.png" alt="">
                <h4><span>Doc</span>y</h4>
            </div>
        </div>
        <h2 class="head">Did You Know?</h2>
        <p></p>
    </div>
</div>
<div class="body_wrapper">
    <nav class="navbar navbar-expand-lg menu_one menu_purple sticky-nav">
        <div class="container">
            <a class="navbar-brand header_logo" href="index.html">
                <img class="first_logo sticky_logo" src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                <img class="white_logo main_logo" src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                        <a href="index.html" class="nav-link dropdown-toggle">Home</a>
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
                                            <div class="tab-pane fade" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab">
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
                                                        <li><a href="doc-element-accordion.html">Accordion</a></li>
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                           data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="onepage.html" class="nav-link">Onepage Doc</a></li>
                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
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
                            <li class="nav-item"><a href="forums.html" class="nav-link">Forums Root</a></li>
                            <li class="nav-item"><a href="forum-topics.html" class="nav-link">Forum Topics</a></li>
                            <li class="nav-item"><a href="forum-single.html" class="nav-link">Topic Details</a></li>
                            <li class="nav-item active"><a href="forum-profile.html" class="nav-link">User Profile</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                           data-toggle="dropdown"></i>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                            <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">Blog Grid Two</a>
                            </li>
                            <li class="nav-item"><a href="blog-list.html" class="nav-link">Blog List</a></li>
                            <li class="nav-item"><a href="blog-single.html" class="nav-link">Blog Details</a></li>
                            <li class="nav-item"><a href="blog-single2.html" class="nav-link">Blog Details Two</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="right-nav">
                    <a class="nav_btn" href="#">Free Trail</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="doc_banner_area single_breadcrumb">
        <ul class="list-unstyled banner_shap_img">
            <li><img src="img/new/banner_shap1.png" alt=""></li>
            <li><img src="img/new/banner_shap4.png" alt=""></li>
            <li><img src="img/new/banner_shap3.png" alt=""></li>
            <li><img src="img/new/banner_shap2.png" alt=""></li>
            <li><img data-parallax='{"x": -180, "y": 80, "rotateY":2000}' src="img/new/plus1.png" alt=""></li>
            <li><img data-parallax='{"x": -50, "y": -160, "rotateZ":200}' src="img/new/plus2.png" alt=""></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="doc_banner_content">
                <h2 class="text-white">Lance Bogrol</h2>
                <ul class="nav justify-content-center">
                    <li><a href="#">Home</a></li>
                    <li><a class="active" href="#">Profile Member</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--================Forum Content Area =================-->
    <section class="forum-user-wrapper">
        <div class="container">
            <div class="row forum_main_inner">
                <div class="col-lg-3">
                    <div class="author_option">
                        <div class="author_img">
                            <img class="img-fluid" src="img/forum/author-1.jpg" alt="">
                        </div>
                        <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true">
                                    <i class="icon_profile"></i> Profile
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile" aria-selected="false">
                                    <i class="icon_documents"></i> Topics Started
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                   aria-controls="contact" aria-selected="false">
                                    <i class="icon_chat"></i> Replies Created
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="fav-tab" data-toggle="tab" href="#fav" role="tab"
                                   aria-controls="fav" aria-selected="false">
                                    <i class="icon_heart"></i> Favorites
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="forum_body_area">
                        <div class="forum_topic_list">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div class="profile_info">
                                        <div class="row p_info_item_inner">
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="img/icon/p-icon-1.png" alt="">
                                                    <a href="#">
                                                        <h4>Forum Role</h4>
                                                    </a>
                                                    <a class="info_btn" href="#">Keymaster</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="img/icon/p-icon-2.png" alt="">
                                                    <a href="#">
                                                        <h4>Topics Started</h4>
                                                    </a>
                                                    <a class="info_number" href="#">32</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="img/icon/p-icon-3.png" alt="">
                                                    <a href="#">
                                                        <h4>Replies Created</h4>
                                                    </a>
                                                    <a class="info_number" href="#">76</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="navbar-nav info_list">
                                            <li><span>Name:</span><a href="#">Lance Bogrol</a></li>
                                            <li><span>Age:</span><a href="#">32</a></li>
                                            <li><span>Gender:</span><a href="#">Male</a></li>
                                            <li><span>Location:</span><a href="#">Berlin</a></li>
                                            <li><span>Biographical Info:</span><a href="#">Trusted by thousands of
                                                    customers,
                                                    our unique themes, templates</a></li>
                                            <li><span>Website: </span><a
                                                    href="#">https://html.spider-themes.com/Docy/</a></li>
                                            <li><span>Blog:</span><a
                                                    href="#">https://wp.spider-themes.com/Docy/</a></li>
                                            <li><span>Registered:</span><a href="#">3 years, 6 months ago</a></li>
                                        </ul>
                                        <ul class="nav p_social">
                                            <li><a href="#"><i class="social_facebook"></i></a></li>
                                            <li><a href="#"><i class="social_twitter"></i></a></li>
                                            <li><a href="#"><i class="social_pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel"
                                     aria-labelledby="profile-tab">
                                    <div class="input-group search_forum">
                                        <input type="text" class="form-control" placeholder="Recipient's username"
                                               aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button"
                                                    id="button-addon2"><i class="icon_search"></i></button>
                                        </div>
                                    </div>
                                    <h2>Forum Topics Started</h2>
                                    <div class="forum_l_inner">
                                        <div class="forum_head d-flex justify-content-between">
                                            <ul class="nav left">
                                                <li><i class="icon_error-circle_alt"></i> 576 Open</li>
                                                <li><a href="#"><i class=" icon_check"></i> 2,974 Closed</a></li>
                                            </ul>
                                            <ul class="nav right">
                                                <li>
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle" type="button"
                                                                id="dropdownMenuButton" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            Author <i class="arrow_carrot-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                             aria-labelledby="dropdownMenuButton">
                                                            <h3 class="title">Filter by author</h3>
                                                            <form action="#" class="cate-search-form">
                                                                <input type="text" placeholder="Search users"
                                                                       id="search_field2">
                                                            </form>
                                                            <div class="all_users scroll">
                                                                <a class="dropdown-item" href="#"><img
                                                                        src="img/forum/filter-user-1.png" alt="">
                                                                    Donny
                                                                    Peters</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                        src="img/forum/filter-user-2.png"
                                                                        alt="">Linh Knapp</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                        src="img/forum/filter-user-3.png"
                                                                        alt="">Albert
                                                                    Roach</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                        src="img/forum/filter-user-4.png"
                                                                        alt="">Kristin
                                                                    Larsen</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                        src="img/forum/filter-user-5.png"
                                                                        alt="">Ernest
                                                                    Patton</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                        src="img/forum/filter-user-2.png"
                                                                        alt="">Linh Knapp
                                                                    Patton</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                        src="img/forum/filter-user-1.png"
                                                                        alt="">Donny
                                                                    Peters</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdown right_dir">
                                                        <button class="btn dropdown-toggle" type="button"
                                                                id="dropdownMenuButton2" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            Label <i class="arrow_carrot-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                             aria-labelledby="dropdownMenuButton2">
                                                            <h3 class="title">Filter by label</h3>
                                                            <form action="#" class="cate-search-form">
                                                                <input type="text" placeholder="Search users"
                                                                       id="search_field1">
                                                            </form>
                                                            <div class="all_users scroll">
                                                                <a class="dropdown-item" href="#"><span
                                                                        class="color red"></span>
                                                                    bugs</a>
                                                                <a class="dropdown-item" href="#"><span
                                                                        class="color blue"></span>
                                                                    request/feature</a>
                                                                <a class="dropdown-item" href="#"><span
                                                                        class="color dark_blue"></span> Developer
                                                                    Edition</a>
                                                                <a class="dropdown-item" href="#"><span
                                                                        class="color green"></span>help wanted</a>
                                                                <a class="dropdown-item" href="#"><span
                                                                        class="color pink"></span>question</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdown">
                                                        <button class="btn dropdown-toggle" type="button"
                                                                id="dropdownMenuButton3" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            Assignee <i class="arrow_carrot-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                             aria-labelledby="dropdownMenuButton3">
                                                            <h3 class="title">Filter by author</h3>
                                                            <form action="#" class="cate-search-form">
                                                                <input type="text" placeholder="Search users"
                                                                       id="search_field3">
                                                            </form>
                                                            <div class="all_users short-by scroll">
                                                                <a class="dropdown-item active-short" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Newest
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Oldest
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Most
                                                                    commented
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Least
                                                                    commented
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Recently
                                                                    updated
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Recently
                                                                    updated
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="dropdown right_dir">
                                                        <button class="btn dropdown-toggle" type="button"
                                                                id="dropdownMenuButton4" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            Sort <i class="arrow_carrot-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                             aria-labelledby="dropdownMenuButton4">
                                                            <h3 class="title">Filter by author</h3>
                                                            <form action="#" class="cate-search-form">
                                                                <input type="text" placeholder="Search users"
                                                                       id="search_field">
                                                            </form>
                                                            <div class="all_users short-by scroll">
                                                                <a class="dropdown-item active-short" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Newest
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Oldest
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Most
                                                                    commented
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Least
                                                                    commented
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Recently
                                                                    updated
                                                                </a>
                                                                <a class="dropdown-item" href="#">
                                                                    <ion-icon name="checkmark-outline"></ion-icon>
                                                                    Recently
                                                                    updated
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="forum_body">
                                            <ul class="navbar-nav topic_list">
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-1.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Workspace/Org Administration</h4>
                                                                </a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-1.png" alt=""> Docs
                                                                    WordPress
                                                                    Theme</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 3 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>45</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>32</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="check">
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-2.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Course do not display properly</h4>
                                                                </a>
                                                                <a class="docbuzz" href="#">Docbuzz</a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-2.png" alt=""> Docbuzz
                                                                    knowledge base template</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 8 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>20</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>12</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-3.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>How to add a different logo image to the NON
                                                                        Sticky header?</h4>
                                                                </a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-3.png" alt="">Rogan
                                                                    WordPress Theme</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 9 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>14</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>10</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-4.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Sticky navbar is shown, but state is
                                                                        inactive
                                                                    </h4>
                                                                </a>
                                                                <a class="docbuzz yellow" href="#">Improvement !</a>
                                                                <a class="docbuzz gray" href="#">CSS</a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-4.png" alt=""> Product
                                                                    Landing Page</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> 1 day, 4 hours ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>33</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>42</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-5.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Performance issue uikit v3 and C3js</h4>
                                                                </a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-5.png"
                                                                         alt="">Responsive
                                                                    wp Theme</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 3 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>15</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>20</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-6.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Course do not display properly</h4>
                                                                </a>
                                                                <a class="docbuzz green" href="#">Feature</a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-6.png" alt="">Rogan
                                                                    WordPress Theme...</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 2 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>16</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>13</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="check">
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-7.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Apps/Integrations/APIs</h4>
                                                                </a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-7.png" alt="">Apps
                                                                    WordPress Theme</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 9 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>20</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>33</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-8.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Course do not display properly</h4>
                                                                </a>
                                                                <a class="docbuzz orange" href="#">Spider theme</a>
                                                                <a class="docbuzz pest" href="#">Open</a>
                                                            </div>

                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-8.png" alt="">Startup
                                                                    and
                                                                    App WP Theme</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 10 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>24</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>14</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-9.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>UK-form-custom / select / multiple </h4>
                                                                </a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-9.png" alt="">Clean
                                                                    Email
                                                                    Template</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 9 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>18</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>20</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-10.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Change “courses” in URL permalink base</h4>
                                                                </a>
                                                                <a class="docbuzz pink" href="#">Bug !</a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-10.png"
                                                                         alt="">Freebies
                                                                    Blog WordPress Theme</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 7 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>21</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>16</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-2.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Disable animations for ui testing</h4>
                                                                </a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-11.png" alt="">T-Shirt
                                                                    Store PrestaShop Theme</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 9 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>23</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>11</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-11.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Lightbox zoom on mobile device</h4>
                                                                </a>
                                                                <a class="docbuzz greenl" href="$">Docs</a>
                                                            </div>
                                                            <a href="#">
                                                                <h6><img src="img/icon/f-icon-5.png" alt="">Attorney
                                                                    WordPress Theme</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> updated 9 days ago
                                                            </h6>
                                                        </div>
                                                        <div class="media-right">
                                                            <a class="count " href="#"><i
                                                                    class="icon_chat_alt"></i>26</a>
                                                            <a class="count rate" href="#"><i
                                                                    class="icon_star"></i>08</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="list_pagination d-flex justify-content-between">
                                        <div class="left">
                                            <p>Viewing 30 topics - 1 through 3 (of 45 total)</p>
                                        </div>
                                        <div class="right">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item active"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#"><i
                                                                class="arrow_carrot-right"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="contact" role="tabpanel"
                                     aria-labelledby="contact-tab">
                                    <div class="input-group search_forum">
                                        <input type="text" class="form-control" placeholder="Your work email"
                                               aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button"
                                                    id="button-addon3"><i class="icon_search"></i></button>
                                        </div>
                                    </div>
                                    <h2>Forum Topics Started</h2>
                                    <div class="forum_l_inner comment_l">
                                        <div class="forum_head d-flex justify-content-between">
                                            <ul class="nav right">
                                                <li>
                                                    <div class="dropdown list_sirt">
                                                        <button class="btn dropdown-toggle" type="button"
                                                                id="dropdownMenuButton5" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            Sirt by <i class="arrow_carrot-down"></i>
                                                        </button>
                                                        <div class="dropdown-menu short-by"
                                                             aria-labelledby="dropdownMenuButton5">
                                                            <a class="dropdown-item active-short"
                                                               href="#0">Oldest</a>
                                                            <a class="dropdown-item" href="#0">Newest</a>
                                                            <a class="dropdown-item" href="#0">First Comments</a>
                                                            <a class="dropdown-item" href="#0">New Comments</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="page">Page 1 of 4</div>
                                        </div>
                                        <div class="forum_body">
                                            <ul class="navbar-nav topic_comment_list">
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-2.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Eh Jewel</h4>
                                                                </a>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn dropdown-toggle" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    ...
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Flag as
                                                                        inappropriate</a>
                                                                    <a class="dropdown-item" href="#">Get direct
                                                                        link</a>
                                                                </div>
                                                            </div>
                                                            <a href="#">
                                                                <h6><i class="icon_check_alt"></i> Moderator</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> January 16 at 10:32 PM
                                                            </h6>
                                                            <p>Cheeky chap jolly good mufty a load of old tosh I
                                                                don't want no agro a chinwag amongst tickety-boo,
                                                                tosser victoria sponge horse play happy days give us
                                                                a bell nice one cup of tea young delinquent wellies,
                                                                cockup absolutely bladdered barmy bleeding.!</p>
                                                            <div class="button_list">
                                                                <a class="reply_btn" href="#">Reply</a>
                                                                <a class="help_btn" href="#">Helpful</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-7.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Penny Tool</h4>
                                                                </a>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn dropdown-toggle" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    ...
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Flag as
                                                                        inappropriate</a>
                                                                    <a class="dropdown-item" href="#">Get direct
                                                                        link</a>
                                                                </div>
                                                            </div>
                                                            <a href="#">
                                                                <h6><i class="icon_check_alt"> </i>Moderator</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> January 22 at 09:44 AM
                                                            </h6>
                                                            <p>That cockup bleeding skive off such a fibber cup of
                                                                char squiffy car boot, lemon squeezy lavatory
                                                                Richard jolly good tosser excuse my French, mush
                                                                barney.</p>
                                                            <div class="button_list">
                                                                <a class="reply_btn" href="#">Reply</a>
                                                                <a class="help_btn" href="#">Helpful</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-12.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Dianne Ameter</h4>
                                                                </a>
                                                            </div>
                                                            <a class="help_start" href="#"><i class="icon_star"></i>
                                                                Helpful</a>
                                                            <a href="#">
                                                                <h6> <i class="icon_check_alt"></i>Moderator</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> January 18 at 11:24 AM
                                                            </h6>
                                                            <p>Cheeky chap jolly good mufty a load of old tosh I
                                                                don't want no agro a chinwag amongst tickety-boo,
                                                                tosser victoria sponge horse play happy days give us
                                                                a bell nice one cup.!</p>
                                                            <div class="button_list">
                                                                <a class="reply_btn" href="#">Reply</a>
                                                                <a class="help_btn" href="#">Helpful</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" src="img/forum/user-13.png"
                                                                 alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="#">
                                                                    <h4>Pelican Steve</h4>
                                                                </a>
                                                            </div>
                                                            <div class="dropdown">
                                                                <button class="btn dropdown-toggle" type="button"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                    ...
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Flag as
                                                                        inappropriate</a>
                                                                    <a class="dropdown-item" href="#">Get direct
                                                                        link</a>
                                                                </div>
                                                            </div>
                                                            <a href="#">
                                                                <h6>Explore</h6>
                                                            </a>
                                                            <h6><i class="icon_calendar"></i> March 12 at 10:25 PM
                                                            </h6>
                                                            <p>That cockup bleeding skive off such a fibber cup of
                                                                char squiffy car boot, lemon squeezy lavatory
                                                                Richard jolly good tosser excuse my French, mush
                                                                barney.</p>
                                                            <div class="button_list">
                                                                <a class="reply_btn" href="#">Reply</a>
                                                                <a class="help_btn" href="#">Helpful</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="list_pagination d-flex justify-content-between">
                                        <div class="left">
                                            <p>Viewing 30 topics - 1 through 3 (of 45 total)</p>
                                        </div>
                                        <div class="right">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item active"><a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#"><i
                                                                class="arrow_carrot-right"></i></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="eng" role="tabpanel" aria-labelledby="eng-tab">
                                    <div class="profile_info">
                                        <div class="row p_info_item_inner">
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="img/icon/p-icon-1.png" alt="">
                                                    <a href="#">
                                                        <h4>Forum Role</h4>
                                                    </a>
                                                    <a class="info_btn" href="#">Keymaster</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="img/icon/p-icon-2.png" alt="">
                                                    <a href="#">
                                                        <h4>Topics Started</h4>
                                                    </a>
                                                    <a class="info_number" href="#">32</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="img/icon/p-icon-3.png" alt="">
                                                    <a href="#">
                                                        <h4>Replies Created</h4>
                                                    </a>
                                                    <a class="info_number" href="#">76</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="navbar-nav info_list">
                                            <li><span>Name:</span><a href="#">Lance Bogrol</a></li>
                                            <li><span>Age:</span><a href="#">32</a></li>
                                            <li><span>Gender:</span><a href="#">Male</a></li>
                                            <li><span>Location:</span><a href="#">Berlin</a></li>
                                            <li><span>Biographical Info:</span><a href="#">Trusted by thousands of
                                                    customers,
                                                    our unique themes, templates</a></li>
                                            <li><span>Website: </span><a
                                                    href="#">https://html.spider-themes.com/Docy/</a></li>
                                            <li><span>Blog:</span><a
                                                    href="#">https://wp.spider-themes.com/Docy/</a></li>
                                            <li><span>Registered:</span><a href="#">3 years, 6 months ago</a></li>
                                        </ul>
                                        <ul class="nav p_social">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="fav" role="tabpanel" aria-labelledby="fav-tab">
                                    <div class="profile_info">
                                        <div class="row p_info_item_inner">
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="img/icon/p-icon-1.png" alt="">
                                                    <a href="#">
                                                        <h4>Forum Role</h4>
                                                    </a>
                                                    <a class="info_btn" href="#">Keymaster</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="img/icon/p-icon-2.png" alt="">
                                                    <a href="#">
                                                        <h4>Topics Started</h4>
                                                    </a>
                                                    <a class="info_number" href="#">32</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="img/icon/p-icon-3.png" alt="">
                                                    <a href="#">
                                                        <h4>Replies Created</h4>
                                                    </a>
                                                    <a class="info_number" href="#">76</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="navbar-nav info_list">
                                            <li><span>Name:</span><a href="#">Lance Bogrol</a></li>
                                            <li><span>Age:</span><a href="#">32</a></li>
                                            <li><span>Gender:</span><a href="#">Male</a></li>
                                            <li><span>Location:</span><a href="#">Berlin</a></li>
                                            <li><span>Biographical Info:</span><a href="#">Trusted by thousands of
                                                    customers,
                                                    our unique themes, templates</a></li>
                                            <li><span>Website: </span><a
                                                    href="#">https://html.spider-themes.com/Docy/</a></li>
                                            <li><span>Blog:</span><a
                                                    href="#">https://wp.spider-themes.com/Docy/</a></li>
                                            <li><span>Registered:</span><a href="#">3 years, 6 months ago</a></li>
                                        </ul>
                                        <ul class="nav p_social">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Forum Content Area =================-->

    <!--================Doc Subscribe Area =================-->
    <section class="doc_subscribe_area doc_subs_full">
        <div class="doc_subscribe_inner">
            <img class="one" src="img/new/subscribe_shap.png" alt="">
            <img class="two" src="img/new/subscribe_shap_two.png" alt="">
            <div class="container">
                <div class="d-flex">
                    <div class="text wow fadeInLeft" data-wow-delay="0.2s">
                        <h2>Great Customer <br>Relationships start here</h2>
                    </div>
                    <form action="#" class="doc_subscribe_form wow fadeInRight mailchimp" data-wow-delay="0.4s"
                          method="post">
                        <div class="form-group">
                            <div class="input-fill">
                                <input type="email" name="EMAIL" id="email" class="memail"
                                       placeholder="Your work email">
                            </div>
                            <button type="submit" class="submit_btn">Get started</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="#">Messenger</a></li>
                            <li><a href="#">Product Tours</a></li>
                            <li><a href="#">Inbox and more</a></li>
                        </ul>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================End Doc Subscribe Area =================-->

    <footer class="doc_footer_area">
        <div class="doc_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="f_widget doc_about_widget wow fadeInUp" data-wow-delay="0.2s">
                            <a href="#"><img src="img/logo.png" srcset="img/logo-2x.png 2x" alt=""></a>
                            <p>I’m available for commissions and collaborations, and i’m excited to hear from you
                                about
                                new projects.!!</p>
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_vimeo"></i></a></li>
                                <li><a href="#"><i class="social_linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="f_widget doc_service_list_widget pl-30 wow fadeInUp" data-wow-delay="0.3s">
                            <h3 class="f_title_two">Solutions</h3>
                            <ul class="list-unstyled">
                                <li><a href="#"><img src="img/new/smile2.png" alt="">Help Docs</a></li>
                                <li><a href="#"><img src="img/new/doc2.png" alt="">Docbuzz</a></li>
                                <li><a href="#"><img src="img/new/house2.png" alt="">User Frontend</a></li>
                                <li><a href="#"><img src="img/new/bag2.png" alt="">Lightbox</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="f_widget doc_service_list_widget pl-100 wow fadeInUp" data-wow-delay="0.4s">
                            <h3 class="f_title_two">Support</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Help Desk</a></li>
                                <li><a href="#">Knowledge Base</a></li>
                                <li><a href="#">Live Chat</a></li>
                                <li><a href="#">Integrations</a></li>
                                <li><a href="#">Reports</a></li>
                                <li><a href="#">iOS & Android</a></li>
                                <li><a href="#">Messages</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="f_widget doc_service_list_widget pl-70 wow fadeInUp" data-wow-delay="0.5s">
                            <h3 class="f_title_two">Company</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Help Scout for Good</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doc_footer_bottom">
            <div class="container d-flex justify-content-between">
                <ul class="doc_footer_menu list-unstyled wow fadeInUp" data-wow-delay="0.2s">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Latest Projects</a></li>

                </ul>
                <p class="wow fadeInUp" data-wow-delay="0.3s">© 2021 All Rights Reserved Design by
                    <span>Spider-themes</span>
                </p>
            </div>
        </div>
    </footer>
</div>

<!-- Back to top button -->
<a id="back-to-top" title="Back to Top"></a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="js/pre-loader.js"></script>
<script src="js/jquery.parallax-scroll.js"></script>
<script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
<script src="assets/wow/wow.min.js"></script>
<script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/magnify-pop/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="js/main.js"></script>
<script src="js/theme.js"></script>

</body>

</html>
