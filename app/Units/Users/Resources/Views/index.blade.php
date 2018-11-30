@extends('adminlte::page')

@section('title', 'SisTIOp - Manutenção Cadastro Usuários')

@section('content_header')
    <div class="icon">
        <h1>
            <i class="fa fa-users"></i>
            Usuários Cadastrados
        </h1>
    </div>
@stop

@section('content')
    @include('users::partials.usersGrid')
@stop

@include('support::partials.assets')