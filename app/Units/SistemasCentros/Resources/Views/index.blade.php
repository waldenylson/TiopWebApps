@extends('adminlte::page')

@section('title', 'SISTIOp - Controle de Associação Sistemas/Centros')

@section('content_header')
    <div class="icon">
        <h1>
            <i class="fa fa-compress"></i>
            Centros Associados
        </h1>
    </div>
@stop

@section('content')
    @if(count($sc) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>NOME</th>
                <th>ACRÔNIMO</th>
                <th>LOCALIDADE</th>
                <th>SISTEMA</th>
                <th>PRODUÇÃO</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            {{--{{ dd($sc) }}--}}
            @foreach($sc as $sistemaCentro)
                <tr>
                    <td>{!! isset($sistemaCentro->centro)  ? $sistemaCentro->centro->nome       : '' !!}</td>
                    <td>{!! isset($sistemaCentro->centro)  ? $sistemaCentro->centro->acronimo   : '' !!}</td>
                    <td>{!! isset($sistemaCentro->centro)  ? $sistemaCentro->centro->localidade : '' !!}</td>
                    <td>
                        {!!
                            isset($sistemaCentro->sistema) ? $sistemaCentro->sistema->nome . " " .
                                                              $sistemaCentro->sistema->versao    : ''
                        !!}
                    </td>
                    <td>
                        {!!
                            isset($sistemaCentro->centro)  ? $sistemaCentro->producao == 1 ? 'SIM' : 'NÃO' : ''
                        !!}
                    </td>

                    <td width="1%" nowrap>
                        <a href="{!! route('sc.edit', $sistemaCentro->id) !!}" class="btn btn-primary btn-xs fancybox">
                            <i class="fa fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('sc.destroy', $sistemaCentro->id) !!}" class="btn btn-danger btn-xs btn-remover">
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