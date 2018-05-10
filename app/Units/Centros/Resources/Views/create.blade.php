@extends('support::templates.fancyboxContent')
<h2>
    <i class="fa fa-compress"></i>
    Cadastrar Centros
</h2>
<hr />

@section('content')

    {!! Form::open(['route' => 'centros.store']) !!}
    @include('centros::partials.form')
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
    </button>
    <button class="btn btn-danger" id="btn-cancelar" type="button">
        <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
    </button>
    {!! Form::close() !!}
@stop
