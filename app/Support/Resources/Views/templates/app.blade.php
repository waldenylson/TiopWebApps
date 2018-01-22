<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
    <title>TIOp - Seção de Informática Operacional</title>
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
    <style>body{margin-top: 80px;}</style>
</head>
<body class="container">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <i class="fa fa-home">&nbsp;&nbsp;HOME&nbsp;</i>
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown" role="menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="true" href="javascript:;">
                       <i class="fa fa-keyboard-o">&nbsp;&nbsp;CADASTROS&nbsp;</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript;"><h7><i class="fa fa-podcast">&nbsp;&nbsp;RADARES</i></h7></a>
                            <ul class="dropdown-menu">
                                <li><a class="fancybox" href="">&nbsp;&nbsp;<i class="fa fa-save">&nbsp;&nbsp;Cadastrar</i></a></li>
                                {{--<li><a class="fancybox" href="{{ route('viaturas.index') }}">&nbsp;&nbsp;<i class="fa fa-search">&nbsp;&nbsp;Localisar</i></a></li>--}}
                            </ul>
                        </li>
                        <li class="divider"></li>

                        <li><a href="javascript;"><h7><i class="fa fa-user">&nbsp;&nbsp;USUÁRIOS&nbsp;&nbsp;</i></h7></a>
                            <ul class="dropdown-menu">
                                <li><a class="fancybox" href="">&nbsp;&nbsp;<i class="fa fa-save">&nbsp;&nbsp;Criar / Excluir Relacionamento</i></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="">
                        <i class="fa fa-user"> {{ 'WALDENYLSONWPSS' }}</i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-sign-out"> SAIR&nbsp;&nbsp;</i>
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
@yield('content')
    <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
</body>
</html>