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
            
            @include('users/includes/footer')
        </div>
            @include('users/includes/scripts')
            <script src="{{ asset('js/product_custom.js') }}"></script>
    </body>
</html>
