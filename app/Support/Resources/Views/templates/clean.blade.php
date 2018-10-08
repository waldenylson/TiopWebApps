<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    {{--<meta http-equiv="refresh" content="10">--}}
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <title>  @yield('title') </title>
    <link rel="stylesheet" href="{!! asset('css/tiop.css') !!}">
</head>
<body>
<div id="app">@yield('content')</div>

<script src="{!! asset('js/manifest.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/vendor.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/tiop.js') !!}" type="text/javascript"></script>

</body>
</html>
