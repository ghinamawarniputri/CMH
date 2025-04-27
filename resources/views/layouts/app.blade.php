<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="author" content="Yuk-Mari" />
    <meta property="og:site_name" content="B&C Cookies" />
    <meta property="og:site" content="{{ env('APP_URL')}}" />
    <meta property="og:title" content="Home - B&C Cookies" />
    <meta
        name="description"
        content="B&C Cookies Bandung Pastry, bakery, and cookies" />
    <meta property="og:image" content="{{ asset('vendor/images/title-logo.png')}}" />
    <meta property="og:url" content="{{ env('APP_URL') }}" />
    <link rel="shortcut icon" href="{{ asset('vendor/images/title-logo.png') }}">
    <title>@yield("title")</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- font awesome style -->
    <link href="{{ asset('vendor/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('vendor/css/style.css')}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('vendor/css/responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css/custome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolioslide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produk1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produk2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produk3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('css/desc-produk.css') }}">
    <link rel="stylesheet" href="{{ asset('css/step.css') }}">
    <link rel="stylesheet" href="{{ asset('css/price-list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    @include('partials.header')

    <div class="hero_area">
        @yield('content')
    </div>

    @include('partials.faquser')
    @include('partials.footer')

    <!-- jQery -->
    <script src="{{ asset('vendor/js/jquery-3.4.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{ asset('vendor/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('vendor/js/bootstrap.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset('vendor/js/custom.js')}}"></script>
    @stack('scripts')
</body>
</html>
