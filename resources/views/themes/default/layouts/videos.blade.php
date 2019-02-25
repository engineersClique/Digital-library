<!doctype html>
<html lang="{{ $locale = str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{env('APP_NAME')}} | {{$title ?? ''}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Bootstrap -->
    <link rel="apple-touch-icon" sizes="140x140" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/vendor/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('js/vendor/modernizr.js')}}"></script> <!-- Modernizr -->
    @stack('styles')
    @stack('header')

</head>
<body class="{{ $page ?? ''}}">
<!-- Static navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
        @include('theme::frontend.partials.header')

        <div class="navbar-collapse collapse">
            @include('theme::frontend.partials.top_nav')
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-sm-3">
            @include('theme::frontend.partials.menu')
        </div>

        <div class="col-sm-9">
            {{--{{ Breadcrumbs::render() }}--}}
            {{--{{ Breadcrumbs::render('videos', $videos) }}--}}

            @yield('content')
        </div>
    </div>
</div>

@include('theme::frontend.partials.footer')
@stack('scripts')

@stack('modal')
<script src="{{asset('js/menu.js')}}"></script>
</body>
</html>