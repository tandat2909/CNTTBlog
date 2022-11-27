@extends('frontend.layouts.default')


@section('title')
    {{$post->name.' - Posts'}}
@endsection


@section('body.wrapper.content')
    {{--    <h1>POST list {{$category->title}}</h1>--}}

    <style>
        .example-block {
            transition: background 0.4s ease-out;
            position: relative;
            display: inline-block;
            height: auto;
        }

        .example-block:hover {
            cursor: pointer;
        }

        /*.example-block .image {*/
        /*    transition: ease-in-out, transform 0.4s ease-in-out;*/
        /*}*/

        /*.example-block:hover .image {*/
        /*    transform: scale(1.8);*/
        /*}*/

        .comment-content-child {
            border-bottom: none !important;
        }
    </style>

    <section class="doc_blog_grid_area sec_pad forum-single-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- Forum post top area -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="forum-post-top">
                                <a class="author-avatar" href="#">
                                    <img src="{{$post->Author->avatar}}" alt="">
                                </a>
                                <div class="forum-post-author">
                                    <a class="author-name" href="#"> {{$post->Author->name}}  </a>
                                    <div class="forum-author-meta">
                                        <div class="author-badge">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="15px">
                                                <path fill-rule="evenodd" fill="rgb(131, 135, 147)"
                                                      d="M11.729,12.136 L11.582,12.167 C11.362,12.415 11.125,12.645 10.869,12.857 L14.999,12.857 C15.134,12.857 15.255,12.944 15.307,13.077 C15.359,13.211 15.331,13.365 15.235,13.467 L14.488,14.268 C14.053,14.733 13.452,15.000 12.838,15.000 L2.495,15.000 C1.872,15.000 1.286,14.740 0.845,14.268 L0.098,13.467 C0.002,13.365 -0.026,13.211 0.026,13.077 C0.077,12.944 0.199,12.857 0.334,12.857 L4.463,12.857 C2.928,11.585 2.000,9.630 2.000,7.499 L2.000,6.785 C2.000,6.194 2.449,5.713 3.000,5.713 L12.333,5.713 C12.885,5.713 13.333,6.194 13.333,6.785 L13.333,7.343 C13.869,7.160 14.736,6.973 15.355,7.400 C15.783,7.696 16.000,8.209 16.000,8.928 C16.000,11.239 11.903,12.100 11.729,12.136 ZM14.994,8.002 C14.557,7.698 13.715,7.941 13.294,8.113 C13.197,9.261 12.837,10.339 12.255,11.269 C13.480,10.911 15.333,10.116 15.333,8.928 C15.333,8.462 15.223,8.158 14.994,8.002 ZM10.261,4.419 C10.376,4.573 10.353,4.798 10.209,4.921 C10.148,4.974 10.074,4.999 10.001,4.999 C9.903,4.999 9.807,4.954 9.740,4.865 C9.198,4.139 9.198,3.002 9.741,2.277 C10.086,1.816 10.086,1.040 9.742,0.580 C9.627,0.426 9.650,0.201 9.794,0.078 C9.937,-0.044 10.146,-0.020 10.263,0.134 C10.805,0.860 10.805,1.996 10.263,2.722 C9.917,3.183 9.917,3.959 10.261,4.419 ZM8.259,4.419 C8.373,4.573 8.350,4.798 8.207,4.921 C8.145,4.974 8.071,4.999 7.999,4.999 C7.901,4.999 7.804,4.954 7.738,4.865 C7.195,4.139 7.195,3.002 7.738,2.277 C8.082,1.816 8.082,1.040 7.739,0.580 C7.624,0.426 7.647,0.201 7.791,0.078 C7.935,-0.045 8.145,-0.020 8.259,0.134 C8.802,0.860 8.802,1.996 8.259,2.722 C7.915,3.183 7.915,3.959 8.259,4.419 ZM6.261,4.418 C6.376,4.572 6.353,4.797 6.210,4.920 C6.148,4.973 6.074,4.999 6.001,4.999 C5.903,4.999 5.807,4.953 5.741,4.865 C5.198,4.139 5.198,3.002 5.741,2.276 C6.085,1.815 6.085,1.039 5.742,0.580 C5.627,0.426 5.650,0.201 5.794,0.078 C5.937,-0.046 6.147,-0.020 6.262,0.133 C6.804,0.859 6.804,1.996 6.262,2.721 C5.918,3.182 5.918,3.959 6.261,4.418 Z"/>
                                            </svg>
                                            {{--                                        <span>Conversation Starter</span>--}}
                                        </div>
                                        <div class="author-badge">
                                            <i class="icon_calendar"></i>
                                            <a href="">{{ $post->updated_at->diffForHumans()}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="action-button-container">
                                <a href="#" class="action_btn btn-ans ask-btn">Ask Question</a>
                            </div>
                        </div>
                    </div>

                    <!-- Forum post content -->
                    <div class="q-title">
                        <span class="question-icon" title="Question">Q:</span>
                        <h1>{{ $post->name}}</h1>
                    </div>
                    <div class="forum-post-content">
                        <div class="content">
                            <p>{{ $post->post_content}}</p>
                        </div>
                        <div class="forum-post-btm">
                            <div class="taxonomy forum-post-tags">
                                <i class="icon_tags_alt"></i>
                                @foreach($post->Hashtags as $tagOfPost)
                                    <a href="#">{{$tagOfPost->title}}</a>
                                    {{$loop->index !== $post->Hashtags->count() - 1 ? "," : ""}}
                                @endforeach
                            </div>
                            <div class="taxonomy forum-post-cat">
                                <div class="col-auto  example-block" id="action-like"><img id="img-like" class="image"
                                                                                           src="{{ $post->isUserLikePost() ? 'https://img.icons8.com/color/48/null/hearts.png' : "https://img.icons8.com/ios/50/null/hearts--v1.png"}}"
                                                                                           alt="Smiling Face With Heart-Eyes"
                                                                                           title="Smiling Face With Heart-Eyes"
                                                                                           width="30" height="30"><span
                                        class="like-number"
                                        style="font-size: 15px; position: absolute; top: 2.5px">{{$post->LikeCollection->count()}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="action-button-container action-btns">

                        </div>
                        <div class="post-comment" id="comment-${commentId}">
                            <form action="{{URL::route('post_comment',['post_url_rewrite' => $post->url_key])}}" id="form-comment-post-id"  onsubmit="return false;">
                                {{csrf_field()}}
                                <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40"><textarea name="content" class="form-control ml-1 shadow-none textarea" id="form-comment-post-id-textbox"></textarea></div>
                                <div class="mt-2 text-right">
                                    <button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button>
                                    <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- All answer -->
                    <div class="all-answers" id="comments">
                       @include('frontend.includes.viewcomments')
                        <div class="pagination-wrapper">
                            <div class="view-post-of">
                                <p>Viewing 4 Comments - 1 through 10 (of 96 total)</p>
                            </div>
                            <ul class="post-pagination">
                                <li class="prev-post pegi-disable"><a href="#"><i class="arrow_carrot-left"></i></a>
                                </li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">15</a></li>
                                <li class="next-post"><a href="#"><i class="arrow_carrot-right"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- /.col-lg-8 -->

                <div class="col-lg-3">
                    <div class="forum_sidebar">
                        <div class="widget status_widget">
                            <h4 class="c_head">Information</h4>
                            <p class="status">Support is <span class="offline">Offline</span></p>
                            <div class="open-hours">
                                <h4 class="title-sm">Our office hours</h4>
                                <p>
                                    Monday - Friday / 10am - 6pm (UTC +4) NewYork
                                </p>
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

                        <div class="widget usefull_links_widget">
                            <h4 class="c_head">Usefull Links</h4>

                            <ul class="list-unstyled usefull-links">
                                <li><i class="icon_lightbulb_alt"></i><a href="#">FAQs</a></li>
                                <li><i class="icon_clock_alt"></i><a href="#">Popular</a></li>
                                <li><i class="icon_piechart"></i><a href="#">Recent</a></li>
                                <li><i class="icon_info_alt"></i><a href="#">Unanswered</a></li>
                            </ul>
                        </div>
                        <div class="widget ticket_widget">
                            <h4 class="c_head">Ticket Categories</h4>

                            <ul class="list-unstyled ticket_categories">
                                <li><img src="img/home_support/cmm5.png" alt="category">
                                    <a href="#">Docs WordPress Theme</a> <span class="count">10</span>
                                </li>
                                <li><img src="img/home_support/cmm4.png" alt="category">
                                    <a href="#">Product Landing</a>
                                    <span class="count count-fill">13</span>
                                    <span class="count">54</span>
                                </li>
                                <li><img src="img/home_support/cmm2.png" alt="category">
                                    <a href="#">Knowledge Base</a><span class="count">142</span>
                                </li>
                                <li><img src="img/home_support/cmm8.png" alt="category">
                                    <a href="#">Startup and App</a> <span class="count">13</span>
                                </li>
                                <li><img src="img/home_support/cmm9.png" alt="category">
                                    <a href="#">Clean Email Template</a> <span class="count">123</span>
                                </li>
                                <li><img src="img/home_support/cmm10.png" alt="category">
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
                                <li><a href="#">WordPress</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">ui/ux</a></li>
                                <li><a href="#">Doc Design</a></li>
                                <li><a href="#">DocAll</a></li>
                                <li><a href="#">Productboard</a></li>
                                <li><a href="#">Magento</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
        </div>
    </section>
@endsection
@section('footer.scripts')
    @parent
    <script>
        $("#action-like").click(function (e) {
            $.ajax({
                    url: "{{URL::route('post_like',['post_url_rewrite' => $post->url_key])}}", success: function (result) {
                        let element = $('.like-number', e.currentTarget);
                        const imgLike = $('#img-like')
                        let number = element.text();
                        if (result?.like === true) {
                            element.text(++number);
                            imgLike.attr("src", "https://img.icons8.com/color/48/null/hearts.png");
                        } else {
                            number = number - 1 < 0 ? 0 : number - 1;
                            element.text(number);
                            imgLike.attr("src", "https://img.icons8.com/ios/50/null/hearts--v1.png");
                        }
                    },
                    error: function (res) {
                        let url = res.responseJSON?.url_login
                        if (url) {
                            window.location.href = url
                        }
                    }
                }
            );
        })
    </script>

    <script>
        function addEventButtonComment(){
            $(".action_btn.btn-comment-child").click(function (e) {
                let btnReply = $(this);
                let commentId = btnReply.data("commentid");
                let url = window.location.pathname + "/comment";
                let formComment = $(`<div class="post-comment" id="comment-${commentId}">
                        <form action="${url}" id="form-comment-${commentId}"  onsubmit="return false;">
                            {{csrf_field()}}
                <input type="hidden" name="parent_id" value="${commentId}" />
                            <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40"><textarea name="content" class="form-control ml-1 shadow-none textarea"></textarea></div>
                            <div class="mt-2 text-right">
                                <button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button>
                                <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button>
                            </div>
                     </form>
                    </div>`)

                $(`#form-comment-${commentId}`,formComment).submit(function (e) {
                    e.preventDefault();
                    let form = $(this);
                    let actionUrl = form.attr('action');
                    $.ajax({
                        type: "POST",
                        url: actionUrl,
                        data: form.serialize(),
                        success: function(data)
                        {
                            $(`#comments`).empty().html(data)
                        }
                    });
                });

                if($(`#comment-${commentId}`).length <=0){
                    btnReply.parent().prepend(formComment);
                }
            })
        }
        addEventButtonComment();

        $(`#form-comment-post-id`).submit(function (e) {
            e.preventDefault();
            let form = $(this);
            let actionUrl = form.attr('action');
            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(),
                success: function(data)
                {
                    $('#form-comment-post-id-textbox').val("");
                    $(`#comments`).empty().html(data)
                }
            });
        });
    </script>


@endsection
