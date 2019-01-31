@extends('support::templates.fancyboxContent')

@section('content')
    <h2>
        <i class="fa fa-clock-o"></i>
        Editar Escala Sobreaviso Militar
    </h2>
    <hr />

    {!! Form::model($sobreaviso, ['route' => ['sobreaviso.update', $sobreaviso->id]]) !!}
    @include('sobreaviso::partials.form')
    <button class="btn btn-primary" type="submit">
        <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
    </button>
    <button class="btn btn-danger" id="btn-cancelar" type="button">
        <i class="fa fa-remove"></i>&nbsp;&nbsp;Cancelar
    </button>
    {!! Form::close() !!}
@stop