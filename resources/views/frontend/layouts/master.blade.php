<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        @include('frontend.partials.styles')
    </head>
<body>
    <!-- Start NavBar Part -->
    @include('frontend.partials.nav')
    <!-- End NavBar Part -->

    @yield('content')

    @include('frontend.partials.footer')

    @include('frontend.partials.scripts')
</body>
</html>