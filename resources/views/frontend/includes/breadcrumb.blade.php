<section class="page_breadcrumb">
    <div class="container">
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