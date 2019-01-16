<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Wallerk')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .fade-enter-active, .fade-leave-active {
            transition-property: opacity;
            transition-duration: .25s;
        }

        .fade-enter-active {
            transition-delay: .25s;
        }

        .fade-enter, .fade-leave-active {
            opacity: 0
        }
    </style>
    @stack('css')
</head>
<body class="bg-grey-lightest font-sans font-normal antialiased">

<div id="app" class="w-full">
    @yield('content')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="{{ mix('/js/manager.js') }}"></script>
<script>
    feather.replace();
</script>
@stack('js')
</body>
</html>
