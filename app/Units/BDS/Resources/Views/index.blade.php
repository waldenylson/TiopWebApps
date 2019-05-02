@extends('adminlte::page')

@section('title', 'SISTIOp - Controle de BDS')

@section('content_header')
    <div class="icon">
        <h1>
            <i class="fa fa-database"></i>
            BDS Cadastradas
        </h1>
    </div>
@stop

@section('content')
    @if(count($bds) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>SIS/CENTRO</th>
                <th>VERSÃO</th>
                <th>ULT.ATUALIZAÇÃO</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            {{--{{ dd($bds) }}--}}
            @foreach($bds as $bdsdata)
                <tr>
                    <td>{!! $bdsdata->SNome . ' v' . $bdsdata->SVersao . '  =>  ' . $bdsdata->cSigla !!}</td>
                    <td>{!! $bdsdata->BDSVer !!}</td>
                    <td>{!! $bdsdata->BDSUpdateDate !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('bds.edit', $bdsdata->id) !!}" class="btn btn-primary btn-xs fancybox">
                            <i class="fa fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('bds.destroy', $bdsdata->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-remove"></i> remover
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhuma BDS Cadastrado ainda!</h5>
    @endif
@stop

@include('support::partials.assets')