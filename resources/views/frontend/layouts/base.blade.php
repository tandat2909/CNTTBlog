<!doctype html>
<html lang="@yield('languages','us')">

<head>
    @yield('head')
</head>

<body data-scroll-animation="true" class="wide-container">
@yield('preloader')
<div class="body_wrapper">
    <div class="click_capture"></div>
    @yield('navigation')
    @yield('body.wrapper')
    @yield('footer')

</div>

@yield('back-to-top')

@yield('footer.scripts')

</body>

</html>
