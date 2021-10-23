<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <title>EDAS MAKINA</title>

    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/hisar_icon.png">
    @include('frontend.layouts.head')
    @yield('css')

</head>
<body>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page">


    @include('frontend.layouts.header')

    @yield('slider')



<!-- Content -->

@yield('content')
<!-- Footer Widgets -->
@include('frontend.layouts.footer')

</div><!-- .restbeef_site_wrapper -->

<!-- JS Files -->
@include('frontend.layouts.script')
@yield('script')
</body>
</html>
