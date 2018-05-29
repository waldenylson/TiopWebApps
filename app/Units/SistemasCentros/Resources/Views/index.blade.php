@extends('adminlte::page')

@section('title', 'centros')

@section('content_header')
    <div class="icon">
        <h1>
            <i class="fa fa-compress"></i>
            Centros Cadastrados
        </h1>
    </div>
@stop

@section('content')
    @if(count($centros) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>NOME</th>
                <th>ACRÔNIMO</th>
                <th>LOCALIDADE</th>
            </tr>
            </thead>
            <tbody>
            @foreach($centros as $sistema)
                <tr>
                    <td>{!! $sistema->nome               !!}</td>
                    <td>{!! $sistema->versao             !!}</td>
                    <td>{!! $sistema->data_atualizacao   !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('centros.edit', $sistema->id) !!}" class="btn btn-primary btn-xs fancybox">
                            <i class="fa fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('centros.destroy', $sistema->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-remove"></i> remover
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhum Centro Cadastrado ainda!</h5>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="/js/app.js"></script>
    @include('support::partials.alerts')
@stop
