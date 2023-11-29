<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! settings()->get("scripts_head") !!}

    <title>{{ settings()->get("page_title") }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="{{ settings()->get("page_description") }}">
    <meta name="robots" content="{{ settings()->get("page_robots") }}">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;800&family=Playfair+Display:wght@800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.min.css?date=12') }}" rel="stylesheet">

    @stack('style')
</head>
<body class="homepage">
{!! settings()->get("scripts_afterbody") !!}
@include('layouts.partials.header')

@yield('content')

@include('layouts.partials.footer')

@include('layouts.partials.cookies')

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/app.min.js') }}" charset="utf-8"></script>

@stack('scripts')

<script type="text/javascript">
    $(document).ready(function(){
        $('#gallery .row').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 3,
            centerMode: true,
            centerPadding: '160px',
            responsive: [
                {
                    breakpoint: 568,
                    settings: {
                        centerPadding: '40px',
                    }
                }
            ]
        })
    });
    $(window).load(function() {
        if(window.location.hash) {
            const section = window.location.hash;
            const header = document.getElementById('header');
            const aboveHeight = header.offsetHeight;
            $('html, body').stop().animate({
                scrollTop: $(section).offset().top - aboveHeight
            }, 1500, 'easeInOutExpo');
            const uri = window.location.toString();
            if (uri.indexOf("#") > 0) {
                const clean_uri = uri.substring(0, uri.indexOf("#"));
                window.history.replaceState({}, document.title, clean_uri);
            }
        }
    });
</script>

{!! settings()->get("scripts_beforebody") !!}

</body>
</html>
