<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>
                    @yield('title', 'root')
                </title>
            </meta>
        </meta>
        <link href="/css/app.css" rel="stylesheet"/>
        <script defer="" src="/js/app.js">
        </script>
        <style>
        </style>
    </head>
    <body>
        @include('partials.nav')
        @include('partials/sessions')
        <button class="btn btn-outline-success">
            hola
        </button>
        @yield('content')
    </body>
</html>
