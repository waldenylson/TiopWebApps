@extends('adminlte::page')

@section('title', 'SISTIOp - Controle de Centros')

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
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($centros as $centro)
                <tr>
                    <td>{!! $centro->nome               !!}</td>
                    <td>{!! $centro->acronimo             !!}</td>
                    <td>{!! $centro->localidade   !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('centros.edit', $centro->id) !!}" class="btn btn-primary btn-xs fancybox">
                            <i class="fa fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('centros.destroy', $centro->id) !!}" class="btn btn-danger btn-xs btn-remover">
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

@include('support::partials.assets')