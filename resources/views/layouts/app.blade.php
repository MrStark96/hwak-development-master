<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>hawk-animation</title>

    <link href="{{ asset('css/newApp.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/drawMap.js') }}"></script>
    <script src="{{ asset('js/locationService.js') }}"></script>
    <script src="{{ asset('js/jquery.loadingdotdotdot.js') }}"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANxtVBChtAr2McEkTXjZIMZ4vjjidNkOQ&callback=initMap"></script>
    <style>
        @-webkit-keyframes opacity {
            0% { opacity: 1; }
            100% { opacity: 0; }
        }
        @-moz-keyframes opacity {
            0% { opacity: 1; }
            100% { opacity: 0; }
        }

        #loading {
            text-align: center;
            margin: 100px 0 0 0;
        }

        #loading span {
            -webkit-animation-name: opacity;
            -webkit-animation-duration: 1s;
            -webkit-animation-iteration-count: infinite;

            -moz-animation-name: opacity;
            -moz-animation-duration: 1s;
            -moz-animation-iteration-count: infinite;
        }

        #loading span:nth-child(2) {
            -webkit-animation-delay: 100ms;
            -moz-animation-delay: 100ms;
        }

        #loading span:nth-child(3) {
            -webkit-animation-delay: 300ms;
            -moz-animation-delay: 300ms;
        }
    </style>
</head>
<body>
    <div id="app">
{{--        @include('include.header')--}}
        <main class="">
            @yield('content')
        </main>
        @include('include.footer')
    </div>
    @yield('footer_scripts')
{{--    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_API_KEY') }}&libraries=places&callback=initAutocomplete" async folder></script>--}}
</body>
</html>
