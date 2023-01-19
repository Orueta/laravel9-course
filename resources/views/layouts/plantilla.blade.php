<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- favicon -->
        <!-- estilos -->

        <style>
            .active{
                color: red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <!-- header -->
        <!-- nav -->

        @include('layouts.partials.header')

        <h1>@yield('content')</h1>

        @include('layouts.partials.footer')

        <!-- footer -->
        <!-- script -->
    </body>
</html>
