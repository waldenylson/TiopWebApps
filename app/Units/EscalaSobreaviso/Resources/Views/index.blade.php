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
    @if(count($usuarios) > 0)
        <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
            <thead>
            <tr>
                <th>POSTO/GRADUAÇÃO</th>
                <th>NOME GUERRA</th>
                <th>DIAS</th>
                <th>AGENDA</th>
                <th>AÇÕES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{!! strtoupper($usuario->posto_gradu) !!} </td>
                    <td>{!! strtoupper($usuario->nome_guerra) !!} </td>
                    <td>{!! $usuario->email                   !!} </td>
                    <td>{!! strtoupper($usuario->agenda)      !!} </td>

                    <td width="1%" nowrap>
                        <a href="{!! route('users.edit', $usuario->id) !!}" class="btn btn-primary btn-xs fancybox">
                            <i class="fa fa-pencil"></i> editar
                        </a>

                        <a href="{!! route('users.destroy', $usuario->id) !!}" class="btn btn-danger btn-xs btn-remover">
                            <i class="fa fa-remove"></i> remover
                        </a>

                        {{--<a href="{!! route('users.index', $usuario->id) !!}" class="btn btn-success btn-xs">--}}
                        {{--<i class="fa fa-key"></i> Criar Login--}}
                        {{--</a>--}}

                        <a href="{!! route('sobreaviso.create', $usuario->id) !!}" class="btn btn-info btn-xs fancybox">
                            <i class="fa fa-clock-o"></i> SV Sobreaviso
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h5 class="well">Nenhum usuário cadastrado ainda!</h5>
    @endif
@stop

@include('support::partials.assets')