@extends('support::templates.fancyboxContent')

@section('content')
    <h2>
        <i class="fa fa-plus"></i>
        Associar Sistemas/Centros
    </h2>
    <hr />

    {!! Form::open(['route' => 'sc.store']) !!}
    @include('sc::partials.form')
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
    </button>
    <button class="btn btn-danger" id="btn-cancelar" type="button">
        <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
    </button>
    {!! Form::close() !!}
@stop
