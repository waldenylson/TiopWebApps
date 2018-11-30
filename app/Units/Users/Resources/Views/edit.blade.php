@extends('support::templates.fancyboxContent')

@section('title', 'SisTIOp - Manutenção Cadastro Usuários')

@section('content')
    <h2>
        <i class="fa fa-user"></i>
        Editar Cadastro Usuário
    </h2>
    <hr />
{{--    {{ dd($user) }}--}}
    {!! Form::model($user, ['route' => ['users.update', $user->id]]) !!}
    @include('users::partials.form')
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
    </button>
    <button class="btn btn-danger" id="btn-cancelar" type="button">
        <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
    </button>
    {!! Form::close() !!}
@stop