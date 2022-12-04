@extends('frontend.layouts.default')

@section('title')
    {{$user->name}}
@endsection

@section('body.wrapper.content')
<section class="forum-user-wrapper">
        <div class="container">
            <div class="row forum_main_inner">
                <div class="col-lg-3">
                    <div class="author_option">
                        <div class="author_img">
                            <img class="img-fluid" src="{{$user->avatar ?? '/img/circled-user-male.png'}}" alt="{{$user->avatar}}">
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
                                                    <img src="/img/icon/p-icon-1.png" alt="">
                                                    <a href="#">
                                                        <h4>Forum Role</h4>
                                                    </a>
                                                    <a class="info_btn" href="#">{{$user->role->title}}</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="/img/icon/p-icon-2.png" alt="">
                                                    <a href="#">
                                                        <h4>Topics Started</h4>
                                                    </a>
                                                    <a class="info_number" href="#">{{$user->countPost()}}</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="p_info_item">
                                                    <img src="/img/icon/p-icon-3.png" alt="">
                                                    <a href="#">
                                                        <h4>Replies Created</h4>
                                                    </a>
                                                    <a class="info_number" href="#">{{$user->countComment()}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="navbar-nav info_list">
                                            <li><span>Last Name:</span><a href="#">{{$user->lastName}}</a></li>
                                            <li><span>Middle Name:</span><a href="#">{{$user->middleName}}</a></li>
                                            <li><span>First Name:</span><rsa href="#">{{$user->firstName}}</rsa></li>
                                            <li><span>Biographical Info:</span><a href="#">{{$user->intro}}</a></li>
                                            <li><span>Link Profile: </span><a
                                                        href="{{URL::route('user',['profile'=>$user->profile])}}">{{URL::route('user',['profile'=>$user->profile])}}</a></li>

                                            <li><span>Registered:</span><a href="#">{{$user->created_at->diffForHumans()}}</a></li>
                                            <li><span>Last Login:</span><a href="#">{{$user->lastLogin->diffForHumans()}}</a></li>
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
                                                                            src="/img/forum/filter-user-1.png" alt="">
                                                                    Donny
                                                                    Peters</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                            src="/img/forum/filter-user-2.png"
                                                                            alt="">Linh Knapp</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                            src="/img/forum/filter-user-3.png"
                                                                            alt="">Albert
                                                                    Roach</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                            src="/img/forum/filter-user-4.png"
                                                                            alt="">Kristin
                                                                    Larsen</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                            src="/img/forum/filter-user-5.png"
                                                                            alt="">Ernest
                                                                    Patton</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                            src="/img/forum/filter-user-2.png"
                                                                            alt="">Linh Knapp
                                                                    Patton</a>
                                                                <a class="dropdown-item" href="#"><img
                                                                            src="/img/forum/filter-user-1.png"
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
                                                @foreach($user->PostCollection as $post)
                                                <li class="{{$post->status == \App\Models\Post::STATUS_APPROVED?"check":""}}">
                                                    <div class="media">
                                                        <div class="d-flex">
                                                            <img class="rounded-circle" width="50px" height="50px" src="{{$post->Author->avatar ??'/img/circled-user-male.png'}}"
                                                                 alt="{{$post->Author->avatar ?? '/img/circled-user-male.png'}}">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="t_title">
                                                                <a href="{{URL::route('post_detail',['post_url_rewrite'=>$post->url_key])}}">
                                                                    <h4>{{$post->name}}</h4>
                                                                </a>
                                                                @foreach($post->Categorys as $category)
                                                                    <a class="docbuzz" href="{{URL::route('catalog_posts',['category_url_rewrite'=> $category->url_rewrite])}}">{{$category->title}}</a>
                                                                @endforeach
                                                            </div>

                                                            <ul class="list-unstyled w_tag_list style-light">
                                                                @foreach($post->hashtags as $hashtag)
                                                                    <li><a href="#">{{ $hashtag->title }}</a></li>
                                                                @endforeach
                                                            </ul>

                                                            <h6 class="t_title"><i class="icon_calendar"></i> {{$post->updated_at->diffForHumans()}} <?= $post->allow_comment ? "<span class='docbuzz greenl'>Allow Comment</span>" : "<span class='docbuzz pink'>DisAllowance Comment</span>"?></h6>
                                                        </div>
                                                        <div class="media-right">

                                                            <a class="count " href="#">{{\App\Models\Post::STATUS[$post->status]}}</a>
                                                            <a class="count " href="#"><i class="icon_chat_alt"></i>{{$post->CommentCollection->count()}}</a>
                                                            <a class="count" href="#"><ion-icon name="eye-outline"></ion-icon> {{$post->views ?? 0}}</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
{{--                                    <div class="list_pagination d-flex justify-content-between">--}}
{{--                                        <div class="left">--}}
{{--                                            <p>Viewing 30 topics - 1 through 3 (of 45 total)</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="right">--}}
{{--                                            <nav aria-label="Page navigation example">--}}
{{--                                                <ul class="pagination">--}}
{{--                                                    <li class="page-item active"><a class="page-link" href="#">1</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="page-item"><a class="page-link" href="#">2</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="page-item"><a class="page-link" href="#">3</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="page-item"><a class="page-link" href="#"><i--}}
{{--                                                                    class="arrow_carrot-right"></i></a></li>--}}
{{--                                                </ul>--}}
{{--                                            </nav>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


