@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group well">
    <div class="row">
        <div class="col-md-3">
            {!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
            {!! Form::text('nome', null, ['class' => 'form-control', 'id' => 'nome', 'autofocus' => '']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('localidade', 'Localidade', ['class' => 'control-label']) !!}
            {!! Form::text('localidade', null, ['class' => 'form-control', 'id' => 'localidade']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('equipamento', 'Equipamento', ['class' => 'control-label']) !!}
            {!! Form::text('equipamento', null, ['class' => 'form-control', 'id' => 'equipamento']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-3">
            {!! Form::label('canalizacao', 'Canalização', ['class' => 'control-label']) !!}
            {!! Form::text('canalizacao', null, ['class' => 'form-control', 'id' => 'canalizacao']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('protocolo', 'Protocolo', ['class' => 'control-label']) !!}
            {!! Form::text('protocolo', null, ['class' => 'form-control', 'id' => 'protocolo']) !!}
        </div>

        <div class="col-md-2">
            {!! Form::label('sic', 'SIC', ['class' => 'control-label']) !!}
            {!! Form::text('sic', null, ['class' => 'form-control', 'id' => 'sic']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('tipo', 'Tipo', ['class' => 'control-label']) !!}
            {!! Form::text('tipo', null, ['class' => 'form-control', 'id' => 'tipo']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('lat', 'LAT', ['class' => 'control-label']) !!}
            {!! Form::text('lat', null, ['class' => 'form-control', 'id' => 'lat']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('long', 'LONG', ['class' => 'control-label']) !!}
            {!! Form::text('long', null, ['class' => 'form-control', 'id' => 'long']) !!}
        </div>
        <div class="col-md-1">
            {!! Form::label('canal_a', 'Canal-A', ['class' => 'control-label']) !!}
            {!! Form::text('canal_a', null, ['class' => 'form-control', 'id' => 'canal_a']) !!}
        </div>
        <div class="col-md-1">
            {!! Form::label('canal_b', 'Canal-B', ['class' => 'control-label']) !!}
            {!! Form::text('canal_b', null, ['class' => 'form-control', 'id' => 'canal_B']) !!}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            {!! Form::label('observacoes', 'Observações', ['class' => 'control-label']) !!}
            {!! Form::textArea('observacoes', null, ['class' => 'form-control', 'id' => 'observacoes']) !!}
        </div>
    </div>
</div>