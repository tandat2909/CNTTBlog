@extends('frontend.layouts.default')

@section('title')
    404
@endsection


@section('body.wrapper')
    <section class="error_area bg_color">
        <div class="error_dot one"></div>
        <div class="error_dot two"></div>
        <div class="error_dot three"></div>
        <div class="error_dot four"></div>
        <div class="container">
            <div class="error_content_two text-center">
                <div class="error_img">
                    <img class="p_absolute error_shap" src="img/404_bg.png" alt="">
                    <div class="one wow clipInDown" data-wow-delay="1s"><img class="img_one" src="img/404_two.png" alt=""></div>
                    <div class="two wow clipInDown" data-wow-delay="1.5s"><img class="img_two" src="img/404_three.png" alt=""></div>
                    <div class="three wow clipInDown" data-wow-delay="1.8s"><img class="img_three" src="img/404_one.png" alt=""></div>
                </div>
                <h2>Error. We can’t find the page you’re looking for.</h2>
                <p>Sorry for the inconvenience. Go to our homepage or check out our latest collections for Fashion, Chair, Decoration...</p>
                <form action="{{URL::route('searchForum')}}" class="error_search">
                    <input type="text" name="q" class="form-control" placeholder="Search"/>
                </form>
                <a href="{{URL::route('index')}}" class="action_btn box_shadow_none"><i class="arrow_left"></i>Back to Home Page</a>
            </div>
        </div>
    </section>

@endsection