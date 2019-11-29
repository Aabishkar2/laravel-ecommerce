<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('users/includes/css')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop_styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop_responsive.css') }}">
        <title> {{ @$title }} </title>
       
    </head>
    <body>
        <div id="">
            @include('users/includes/head')
            @include('users/includes/categorypage')
            @include('users/includes/footer')
        </div>
            <script src="{{ asset('js/shop_custom.js') }}"></script>
            @include('users/includes/scripts')
            <script>
               
            </script>
    </body>
</html>
