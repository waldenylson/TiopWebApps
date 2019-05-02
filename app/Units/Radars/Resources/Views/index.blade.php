@extends('adminlte::page')

@section('title', 'SISTIOp - Controle Cadastro de Radares')

@section('content_header')
    <div class="icon">
        <h1>
            <i class="ion ion-radio-waves"></i>
            Radares Cadastrados
        </h1>
    </div>
@stop

@section('content')
    @if(count($radares) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>RADAR</th>
                <th>CANALIZAÇÃO</th>
                <th>PROTOCOLO</th>
                <th>SIC</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($radares as $radar)
                <tr>
                    <td>{!! $radar->nome                                          !!}</td>
                    <td>{!! $radar->canalizacao                                         !!}</td>
                    <td>{!! $radar->protocolo                                        !!}</td>
                    <td>{!! $radar->sic !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('radars.edit', $radar->id) !!}" class="btn btn-primary btn-xs fancybox">
                            <i class="fa fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('radars.destroy', $radar->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-remove"></i> remover
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhum Radar Cadastrado ainda!</h5>
    @endif
@stop

@include('support::partials.assets')
