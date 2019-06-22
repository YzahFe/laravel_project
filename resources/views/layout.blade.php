<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title', 'Project List')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head> 
    <body>
        @yield('content');
    </body>
</html>