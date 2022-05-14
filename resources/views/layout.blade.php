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
             .mal{
                color: red;
                font-size: 20;
                font-weight: 40;
             }
        </style>
    </head>
    <body>
        @include('partials.nav')
        @yield('content')
    </body>
</html>
