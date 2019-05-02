@extends('adminlte::page')

@section('title', 'SISTIOp - Controle Cadastro de Sistemas')

@section('content_header')
    <div class="icon">
        <h1>
            <i class="ion ion-code"></i>
            Sistemas Cadastrados
        </h1>
    </div>
@stop

@section('content')
    @if(count($sistemas) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>SISTEMA</th>
                <th>VERSÃO</th>
                <th>DATA ATUALIZAÇÃO</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sistemas as $sistema)
                <tr>
                    <td>{!! $sistema->nome               !!}</td>
                    <td>{!! $sistema->versao             !!}</td>
                    <td>{!! $sistema->data_atualizacao   !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('sistemas.edit', $sistema->id) !!}" class="btn btn-primary btn-xs fancybox">
                            <i class="fa fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('sistemas.destroy', $sistema->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-remove"></i> remover
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhum Sistema Cadastrado ainda!</h5>
    @endif
@stop

@include('support::partials.assets')