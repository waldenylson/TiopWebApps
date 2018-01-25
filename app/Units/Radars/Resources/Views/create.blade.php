@extends('adminlte::page')

@section('title', 'Cadastrar Radares')

@section('content_header')
    <h2>
        <i class="fa fa-podcast"></i>
        Cadastrar Radar
    </h2>
    <hr />
@stop

@section('content')

    {!! Form::open(['route' => 'radars.store']) !!}
    @include('radars::partials.form')
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
    </button>
    <button class="btn btn-danger" id="btn-cancelar" type="button">
        <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
    </button>
    {!! Form::close() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="/js/app.js"></script>
@stop
