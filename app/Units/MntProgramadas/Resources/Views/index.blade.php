@extends('adminlte::page')

@section('title', 'SISTIOp - Controle de MNT Programadas')

@section('content_header')
    <div class="icon">
        <h1>
            <i class="fa fa-clock-o"></i>
            Manutenções Programadas
        </h1>
    </div>
@stop

@section('content')
    @if(count($mntProgramadas) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>RADAR</th>
                <th>DATA/HORA INICIAL</th>
                <th>DATA/HORA FINAL</th>
                <th>MOTIVO</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mntProgramadas as $mntProgramada)
                <tr>
                    <td>{!! $mntProgramada->radar->nome  !!}</td>
                    <td>
                        {!!
                            $mntProgramada->data_ini . " "    .
                            $mntProgramada->hora_ini
                        !!}
                    </td>
                    <td>
                        {!!
                            $mntProgramada->data_fim . " "    .
                            $mntProgramada->hora_fim
                        !!}
                    </td>
                    <td>{!! $mntProgramada->motivo   !!}</td>

                    <td width="1%" nowrap>
                        <a href="{!! route('mntProg.edit', $mntProgramada->id) !!}" class="btn btn-primary btn-xs fancybox">
                            <i class="fa fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('mntProg.destroy', $mntProgramada->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-remove"></i> remover
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhuma Manutenção Cadastrada/Vigente!</h5>
    @endif
@stop

@include('support::partials.assets')