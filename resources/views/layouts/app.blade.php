<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ trans('panel.site_title') }}</title>
    </head>

    <body style="margin:0 auto; width:1300px;">
        @yield('content')
    </body>
</html>