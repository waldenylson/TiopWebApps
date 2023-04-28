@extends('adminlte::page')

@section('title', 'SISTIOp - Controle Cadastro de RPL')

@section('content_header')
    <div class="icon">
        <h1>
            <i class="fa fa-plane"></i>
            RPL Cadastradas
        </h1>
    </div>
@stop

@section('content')
    @if(count($rpl) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>NÚMERO</th>
                <th>DATA CARGA</th>
                <th>VALIDADE</th>
                <th>VERSAO BDS</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
{{--            {{ dd($rpl) }}--}}
            @foreach($rpl as $rpldata)
                <tr>
                    <td>{!! $rpldata->numero !!}</td>
                    <td>{!! $rpldata->dtCarga !!}</td>
                    <td>{!! $rpldata->validade !!}</td>
                    <td>{!! $rpldata->BDSVer !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('rpl.edit', $rpldata->id) !!}" class="btn btn-primary btn-xs fancybox">
                            <i class="fa fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('rpl.destroy', $rpldata->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-remove"></i> remover
                        </a>

                        @if($rpldata->cgna_rpl == 3)
                            <a class="btn btn-info btn-xs">
                                <b><i class="fa fa-check-circle"></i> RPL Agendado SAGITARIO</b>
                            </a>
                        @elseif($rpldata->cgna_rpl == 1)
                            <a href="{!! route('rpl.tratamentoRPLIniciado') !!}" class="btn btn-success  btn-xs">
                                <i class="fa fa-check"></i> Tratamento RPL Futuro Iniciado
                            </a>
                        @elseif($rpldata->cgna_rpl == 2)
                            <a href="{!! route('rpl.respostaRPLCAIS') !!}" class="btn btn-success  btn-xs">
                                <i class="fa fa-check"></i> Finalizar Tratamento RPL Futuro
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhuma RPL Cadastrado ainda!</h5>
    @endif
@stop

@include('support::partials.assets')