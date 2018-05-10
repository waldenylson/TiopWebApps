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
            {!! Form::label('acronimo', 'Acrônimo', ['class' => 'control-label']) !!}
            {!! Form::text('acronimo', null, ['class' => 'form-control', 'id' => 'acronimo']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-7">
            {!! Form::label('localidade', 'Localidade', ['class' => 'control-label']) !!}
            {!! Form::textArea('localidade', null, ['class' => 'form-control', 'id' => 'localidade']) !!}
        </div>
    </div>
</div>