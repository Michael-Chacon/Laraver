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
        <style>
            .active a {
                color: red;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        @include('partials.nav')
        @yield('content')
    </body>
</html>
