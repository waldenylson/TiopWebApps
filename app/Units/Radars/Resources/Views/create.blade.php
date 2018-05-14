@extends('support::templates.fancyboxContent')

@section('content')
    <h2>
        <i class="fa fa-podcast"></i>
        Cadastrar Radar
    </h2>
    <hr />

    {!! Form::open(['route' => 'radars.store']) !!}
    @include('radars::partials.form')
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
    </button>
    <button class="btn btn-danger" id="btn-cancelar" type="button">
        <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
    </button>
    {!! Form::close() !!}
@stop
