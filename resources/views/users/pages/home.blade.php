<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Mountain Journey Treks</title>
        <link rel="icon" type="image/png" href="asset('assets/img/favicon.png')" />
        @include('users/includes/css')
    </head>
    <body>
        @include('users/includes/header')
        @include('users/includes/banner')
        @include('users/includes/search')
        @include('users/includes/homeafterbanner')
        @include('users/includes/bannerbase')
        @include('users/includes/featuredtrip')
        @include('users/includes/footer')
        @include('users/includes/scripts')
    </body> 
    <script src="{{ asset('assets/js/min/home.min.js') }}"></script>
</html>
