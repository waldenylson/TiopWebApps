<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>AETR - Controle Online de Viaturas</title>
    <link rel="stylesheet" href="{!! asset('styles/app.css') !!}">

    <link rel="stylesheet" href="{!! asset('bower_components/bulma/css/bulma.css') !!}">
    <link rel="stylesheet" href="{!! asset('bower_components/bulma/css/bulma.css.map') !!}">
    <link rel="stylesheet" href="{!! asset('bower_components/font-awesome/css/font-awesome.css') !!}">

    <style>body{margin-top: 10px; -webkit-print-color-adjust: exact;}</style>
</head>
<body class="container">
@yield('content')
<script src="{!! asset('bower_components/jquery/dist/jquery.js') !!}" type="text/javascript"></script>
<script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.js') !!}" type="text/javascript"></script>
</body>
</html>