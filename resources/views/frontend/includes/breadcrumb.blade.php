@if(str_contains(request()->getPathInfo(),'profile'))
    <section class="doc_banner_area single_breadcrumb">
        <ul class="list-unstyled banner_shap_img">
            <li><img src="/img/new/banner_shap1.png" alt=""></li>
            <li><img src="/img/new/banner_shap4.png" alt=""></li>
            <li><img src="/img/new/banner_shap3.png" alt=""></li>
            <li><img src="/img/new/banner_shap2.png" alt=""></li>
            <li><img data-parallax='{"x": -180, "y": 80, "rotateY":2000}' src="/img/new/plus1.png" alt=""></li>
            <li><img data-parallax='{"x": -50, "y": -160, "rotateZ":200}' src="/img/new/plus2.png" alt=""></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="doc_banner_content">
                <h2 class="text-white">{{$user->name}}</h2>
                <ul class="nav justify-content-center">
                    <li><a href="/">Home</a></li>
                    <li><a class="active" href="#">Profile</a></li>
                </ul>
            </div>
        </div>
    </section>
@else
    <section class="page_breadcrumb">
    <div class="container" id="container">
        <div class="row">
            <div class="col-sm-7">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        @foreach($breadcrumbs??[]  as $key => $breadcrumbsInfo)
                            <li class="breadcrumb-item {{$loop->last ? "active":''}}">
                                @if(!$loop->last)
                                    <a href="{{$breadcrumbsInfo['link']}}">{{$breadcrumbsInfo['label']}}</a>
                                @else
                                    {{$breadcrumbsInfo['label']}}
                                @endif
                            </li>
                        @endforeach
                    </ol>

                </nav>
            </div>
            <div class="col-sm-5">
                <a href="#" class="date"><i class="icon_clock_alt"></i>Updated on March 03, 2020</a>
            </div>
        </div>
    </div>
</section>
@endif