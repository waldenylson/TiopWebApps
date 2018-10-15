@extends('adminlte::page')

@section('title', 'SisGATO - Manutenção Cadastro Usuários')

@section('content_header')
    <div class="icon">
        <h1>
            <i class="fa fa-users"></i>
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