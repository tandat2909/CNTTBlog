@extends('frontend.layouts.base')

@section('head')

    <title>@yield('title')</title>

    @include('frontend.includes.head')
    @yield('head.meta')

    @yield('head.css')

    @yield('head.scripts')

@endsection


@section('preloader')
    @include('frontend.includes.preloader')
@endsection

@section('navigation')
    @include('frontend.includes.navigation')
@endsection

@section('body.wrapper')
    @include('frontend.includes.banner')
    @include('frontend.includes.breadcrumb')
    @yield('body.wrapper.content')

@endsection


@section('footer')
    @include('frontend.includes.footer')
@endsection



<!-- Back to top button -->
@section('back-to-top')
    <a id="back-to-top" title="Back to Top"></a>
@endsection


@section('footer.scripts')
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/bootstrap/js/popper.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/pre-loader.js"></script>
    <script src="/js/jquery.parallax-scroll.js"></script>
    <script src="/assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="/assets/wow/wow.min.js"></script>
    <script src="/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <script src="/assets/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/theme.js"></script>
    <script src="/assets/slick/slick.min.js"></script>


@endsection
