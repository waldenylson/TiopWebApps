
@extends('support::templates.fancyboxContent')
<h2>
    <i class="fa fa-podcast"></i>
    Editar Radar
</h2>
<hr />

@section('content')

    {!! Form::model($radar, ['route' => ['radars.update', $radar->id]]) !!}
    @include('radars::partials.form')
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
    </button>
    <button class="btn btn-danger" id="btn-cancelar" type="button">
        <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
    </button>
    {!! Form::close() !!}
@stop
