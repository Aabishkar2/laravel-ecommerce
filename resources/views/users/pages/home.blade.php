<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> {{ @$title }} </title>
        @include('users/includes/css')
    </head>
    <body>
        <div id="">
            @include('users/includes/head')
            @include('users/includes/body')
            @include('users/includes/featured')
            @include('users/includes/footer')
        </div>
            @include('users/includes/scripts')
    </body>
</html>
