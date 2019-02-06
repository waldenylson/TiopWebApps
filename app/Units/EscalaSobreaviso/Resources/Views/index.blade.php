@extends('adminlte::page')

@section('title', 'SisTIOp')

@section('content_header')
    <div class="icon">
        <h1>
            <i class="fa fa-clock-o"></i>
            Escala Sobreaviso - Mês Atual
        </h1>
    </div>
@stop

@section('content')
    @if(count($escalaSobreaviso) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>GRADUAÇÃO</th>
                <th>NOME GUERRA</th>
                <th>DIAS</th>
                <th>AGENDA</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($escalaSobreaviso as $escala)
                <tr>
                    @if($escala->mes == date('n'))
                        <td>{!! strtoupper($escala->efetivoTiop->posto_gradu) !!} </td>
                        <td>{!! strtoupper($escala->efetivoTiop->nome_guerra) !!} </td>
                        <td>
                            <?php $arrayDias = explode(',', $escala->dias); ?>
                            @foreach($arrayDias as $dia)
                                <span class="list-dias-sobreaviso">{!! $dia !!}</span>
                            @endforeach
                        </td>
                        <td>{!! strtoupper($escala->efetivoTiop->agenda)      !!} </td>

                        <td width="1%" nowrap>
                            <a href="{!! route('sobreaviso.edit', $escala->id) !!}" class="btn btn-primary btn-xs fancybox">
                                <i class="fa fa-pencil"></i> editar
                            </a>

                            <a href="{!! route('sobreaviso.destroy', $escala->id) !!}" class="btn btn-danger btn-xs btn-remover">
                                <i class="fa fa-remove"></i> remover
                            </a>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhum usuário cadastrado ainda!</h5>
    @endif
@stop

@include('support::partials.assets')