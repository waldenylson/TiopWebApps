@extends('support::templates.fancyboxContent')
<h2>
    <i class="fa fa-code"></i>
    Cadastrar Sistema
</h2>
<hr />

@section('content')

    {!! Form::open(['route' => 'sistemas.store']) !!}
    @include('sistemas::partials.form')
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
    </button>
    <button class="btn btn-danger" id="btn-cancelar" type="button">
        <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
    </button>
    {!! Form::close() !!}
@stop
