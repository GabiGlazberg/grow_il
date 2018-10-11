<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--Custom rtl, ltr style--}}
        <link href="{{ url((config('app.direction') == 'rtl') ? 'assets/web/css/main-rtl.css' : 'assets/web/css/main-ltr.css') }}?v={{ env('version', time()) }}" rel="stylesheet" type="text/css" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

    </head>

    <body>
        <main>
            @yield('content')
        </main>
    </body>

</html>
