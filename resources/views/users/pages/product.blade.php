<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> {{ @$title }} </title>
        @include('users/includes/css')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/product_styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/product_responsive.css') }}">
    </head>
    <body>
        <div id="">
            @include('users/includes/head')
            <hr>
            @include('users/includes/singleproduct')
            @include('users/includes/similarproduct')
            @include('users/includes/footer')
        </div>
            <script src="{{ asset('js/product_custom.js') }}"></script>
            @include('users/includes/scripts')
    </body>
</html>
