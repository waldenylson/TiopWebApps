<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{!! csrf_token() !!}">
	<title>  @yield('title') </title>
    <link rel="stylesheet" href="{!! asset('css/tiop.css') !!}">
	<style>
		.container {
			padding: 10px 10px 10px 10px;
		}
	</style>
</head>
<body>
<div class="container">
		@yield('content')
	</div>

	<script src="{!! asset('js/manifest.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('js/vendor.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('js/tiop.js') !!}" type="text/javascript"></script>
	<script src="{!! asset('ckeditor/ckeditor.js') !!}" type="text/javascript"></script>
	<script type="text/javascript">
        CKEDITOR.config.height = 150;
        CKEDITOR.replaceAll();
    </script>
	@include('support::partials.alerts')
</body>
</html>