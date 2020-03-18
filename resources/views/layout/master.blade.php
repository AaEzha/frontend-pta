<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/owl.png') }}">
    <title>Reza</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    @yield('content_head')
</head>

<body>
    @include('layout._nav')

    <main class="main-content" style="background:#fffff">

        @yield('content')

    </main>
    @include('layout._footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/page.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script>
    </script>
    {{-- <script src="http://malsup.github.io/jquery.blockUI.js"></script> --}}
    @yield('content_footer')

</body>

</html>
