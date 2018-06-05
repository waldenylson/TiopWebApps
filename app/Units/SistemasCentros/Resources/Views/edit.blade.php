@extends('support::templates.fancyboxContent')

@section('content')
    <h2>
        <i class="fa fa-compress"></i>
        Cadastrar Centros
    </h2>
    <hr />

    {!! Form::model($sistemaCentro, ['route' => ['sc.update', $sistemaCentro->id]]) !!}
    @include('sc::partials.form')
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
    </button>
    <button class="btn btn-danger" id="btn-cancelar" type="button">
        <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
    </button>
    {!! Form::close() !!}
@stop