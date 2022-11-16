@extends('frontend.layouts.default')

@section('title')
    Forums CNTT
@endsection

@section('body.wrapper.content')
    <section class="doc_blog_grid_area sec_pad forum-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="answer-action shadow">
                        <div class="action-content">
                            <div class="image-wrap">
                                <img src="/img/home_support/answer.png" alt="answer action"/>
                            </div>
                            <div class="content">
                                <h2 class="ans-title">Can’t find an answer?</h2>
                                <p> Make use of a qualified tutor to get the answer </p>
                            </div>
                        </div>
                        <!-- /.action-content -->
                        <div class="action-button-container">
                            <a href="#" class="action_btn btn-ans">Ask a Question</a>
                        </div>
                        <!-- /.action-button-container -->
                    </div>
                    <!-- /.answer-action -->

                    <div class="post-header forums-header">
                        <div class="col-md-6 col-sm-6 support-info">
                            <span> Forum </span>
                        </div>
                        <!-- /.support-info -->
                        <div class="col-md-6 col-sm-6 support-category-menus">
                            <ul class="forum-titles">
                                <li class="forum-topic-count">Topics</li>
                                <li class="forum-reply-count">Posts</li>
                                <li class="forum-freshness">Last Post</li>
                            </ul>
                        </div>
                        <!-- /.support-category-menus -->
                    </div>
                    <!-- /.post-header -->

                    <div class="community-posts-wrapper bb-radius">

                        @foreach($categories ?? [] as $category)
                            <!-- Forum Item -->
                            <div class="community-post style-two forum-item bug">
                                <div class="col-md-6 post-content">
                                    <div class="author-avatar forum-icon">
                                        <img src="/img/{{$category->image ?? ''}}" alt="{{$category->image ?? ''}}"/>
                                    </div>
                                    <div class="entry-content">
                                        <a href="{{URL::route('catalog_posts',['category_url_rewrite' => $category->url_rewrite])}}"> <h3 class="post-title">
                                            {{$category->title}} </h3> </a>
                                        <p>{{$category->content}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 post-meta-wrapper">
                                    <ul class="forum-titles">
                                        <li class="forum-topic-count">10</li>
                                        <li class="forum-reply-count">{{$category->countPost()}}</li>
                                        <li class="forum-freshness">
                                            <div class="freshness-box">
                                                <div class="freshness-top">
                                                    <div class="freshness-link">
                                                        <a href="#" title="Reply To: Main Forum Rules &amp; Policies">2 years, 2 months ago</a>
                                                    </div>
                                                </div>
                                                <div class="freshness-btm">
                                                    <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                        <div class="freshness-name">
                                                            <a href="#" title="View Eh Jewel's profile" class="bbp-author-link">
                                                                <span class="bbp-author-name">Eh Jewel</span>
                                                            </a>
                                                        </div>
                                                        <span class="bbp-author-avatar">
                                                                <img alt="Eh Jewel" src="/img/home_support/cp5.jpg" class="avatar photo"/>
                                                            </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.forum-item  -->
                        @endforeach


                    </div>
                    <!-- /.community-posts-wrapper -->
                </div>
                <!-- /.col-lg-9 -->

                <div class="col-lg-3">
                    <div class="forum_sidebar">
                        <div class="widget status_widget">
                            <h4 class="c_head">Information</h4>
                            <p class="status">Support is <span class="offline">Offline</span></p>

                            <div class="open-hours">
                                <h4 class="title-sm">Our office hours</h4>
                                <p>Monday - Friday / 10am - 6pm (UTC +4) NewYork</p>
                                <ul class="current-time list-unstyled">
                                    <li>
                                        <h4 class="title-sm">Your time</h4>
                                        <p>10:30:15 PM</p>
                                    </li>
                                    <li>
                                        <h4 class="title-sm">Your time</h4>
                                        <p>10:30:15 PM</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.open-hours -->

                        </div>

                        <div class="widget ticket_widget">
                            <h4 class="c_head">Ticket Categories</h4>

                            <ul class="list-unstyled ticket_categories">
                                <li><img src="/img/home_support/cmm5.png" alt="category"/>
                                    <a href="#">Docs WordPress Theme</a> <span class="count">10</span>
                                </li>
                                <li><img src="/img/home_support/cmm4.png" alt="category"/>
                                    <a href="#">Product Landing</a>
                                    <span class="count count-fill">13</span>
                                    <span class="count">54</span>
                                </li>
                                <li><img src="/img/home_support/cmm2.png" alt="category"/>
                                    <a href="#">Knowledge Base</a><span class="count">142</span>
                                </li>
                                <li><img src="/img/home_support/cmm8.png" alt="category"/>
                                    <a href="#">Startup and App</a> <span class="count">13</span>
                                </li>
                                <li><img src="/img/home_support/cmm9.png" alt="category"/>
                                    <a href="#">Clean Email Template</a> <span class="count">123</span>
                                </li>
                                <li><img src="/img/home_support/cmm10.png" alt="category"/>
                                    <a href="#">Apps WordPress Theme</a> <span class="count">18</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget tag_widget">
                            <h4 class="c_head">Tags</h4>
                            <ul class="list-unstyled w_tag_list style-light">
                                <li><a href="#">Swagger</a></li>
                                <li><a href="#">Docy</a></li>
                                <li><a href="#">weCare</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Download</a></li>
                                <li><a href="#">Doc</a></li>
                                <li><a href="#">Product board</a></li>
                                <li><a href="#">WordPress</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">ui/ux</a></li>
                                <li><a href="#">Doc Design</a></li>
                                <li><a href="#">DocAll</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- /.col-lg-3 -->
            </div>
        </div>
    </section>

    <div class="call-to-action">
        <div class="overlay-bg"></div>
        <div class="container">
            <div class="action-content-wrapper">
                <div class="action-title-wrap title-img">
                    <img src="/img/home_support/chat-smile.png" alt=""/>
                    <h2 class="action-title">New to Communities?</h2>
                </div>
                <a href="#" class="action_btn">Join the community <i class="arrow_right"></i></a>
            </div>
            <!-- /.action-content-wrapper -->
        </div>
        <!-- /.container -->
    </div>
@endsection