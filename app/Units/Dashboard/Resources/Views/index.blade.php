@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="small-box bg-green">
        <div class="inner">
            <h3>10</h3>

            <p>Radares Cadastrados</p>
        </div>
        <div class="icon">
            <i class="ion ion-radio-waves"></i>
        </div>
        <a href="{{ route('radars.index') }}" class="small-box-footer">
            Mais detalhes <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="/js/app.js"></script>
@stop