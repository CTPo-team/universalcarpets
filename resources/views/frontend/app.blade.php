<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Universalcarpets</title>
    <!-- Meta -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    @if(isset($seo))
@if(isset($seo["description"]) && !empty($seo["description"]))
    <meta name='description' itemprop='description' content="{!! $seo["description"] !!}" />
    <meta property="og:description"content="{!! $seo["description"] !!}"" />
@endif

@if(isset($seo["title"]) && !empty($seo["title"]))
    <meta property="og:title"content="{!! $seo["title"] !!}" />
@endif

@if(isset($seo["keywords"]) && !empty($seo["keywords"]))
    <meta name='keywords' content="{!! $seo["keywords"] !!}" />
@endif

@if((isset($seo["article:published_time"]) && !empty($seo["article:published_time"])) && (isset($seo["article:section"]) && !empty($seo["article:section"])))
    <meta property='article:published_time' content="{!! $seo["article:published_time"] !!}" />
    <meta property='article:section' content="{!! $seo["article:section"] !!}" />
@endif

    <meta property="og:url"content="{!! URL::current() !!}" />
    <meta property="og:locale"content="en-id" />

    @endif
    
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon"/>
    <!-- Bootstrap 4.1.1 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Source+Sans+Pro:wght@400&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/fecustom.css') }}" rel="stylesheet" type="text/css"/>
    @yield('page_css')
    <!-- Template CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('web/css/style.css') }}"> -->
    <style>   
    body{
        /* font-family: 'Playfair Display', serif; */
        font-family: 'Source Sans Pro', sans-serif;
        overflow-x: hidden;
        background:#F5F5F5;
    }
    </style>
    @yield('page_css')
    @yield('css')
</head>
<body>

<div id="app">
@include("frontend.navbar")
        @yield('content')    
</div>

@include("frontend.footer")

</body>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
@yield('scripts')
<script>
           $(document).scroll(function () {
            var $nav = $(".sticky-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
</script>
</html>
