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
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="action_btn btn-ans">Ask a Question</button>
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
                                                        <a href="#" title="Reply To: Main Forum Rules &amp; Policies">{{ $category->updated_at ? $category->updated_at->diffForHumans():""}}</a>
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
                @include('frontend.includes.information')
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
    @include('frontend.includes.createpost')
@endsection
