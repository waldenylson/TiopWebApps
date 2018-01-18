@extends('auth.templates.master')

@section('content')

	@if($errors->any())
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-offset-3">
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<li>{!! $error !!}</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="glyphicon glyphicon-lock"></i>&nbsp;&nbsp;<b>Acesso ao Sistema</b>
					</div>
					<div class="panel-body">
						{!! Form::open(['route' => 'seguranca.login']) !!}
						<div style="padding: 20px;" id="form-olvidado">
							<div class="form-group input-group">
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</span>
								{!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username', 'autofocus' => '', 'placeholder' => 'Usuário']) !!}
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<i class="fa fa-key"></i>
								</span>
								<input class="form-control" placeholder="Senha" name="password" type="password" value="" id="password">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">
									<i class="fa fa-btn fa-sign-in"></i>&nbsp;&nbsp;Entrar
								</button>
								<p class="help-block">
									<i class="pull-right text-muted"><small>Este sistema usa a mesma base de usuário/senha do Hydra.</small></i>
								</p>
							</div>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@stop