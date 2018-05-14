<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<title>TIOp - Seção de Informática Operacional</title>
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
	<style>
		.container {
			padding: 10px 10px 10px 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		@yield('content')

		<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

		@include('support::partials.alerts')
	</div>
	<script src="{!! asset('ckeditor/ckeditor.js') !!}" type="text/javascript"></script>
</body>
</html>