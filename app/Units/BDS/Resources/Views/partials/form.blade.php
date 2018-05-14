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
        <div class="col-md-2">
            {!! Form::label('nome', 'Nome', ['class' => 'control-label']) !!}
            {!! Form::text('nome', null, ['class' => 'form-control', 'id' => 'nome', 'autofocus' => '']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('acronimo', 'Acrônimo', ['class' => 'control-label']) !!}
            {!! Form::text('acronimo', null, ['class' => 'form-control', 'id' => 'acronimo']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('localidade', 'Localidade', ['class' => 'control-label']) !!}
            {!! Form::text('localidade', null, ['class' => 'form-control', 'id' => 'localidade']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6">
            {!! Form::label('descricao', 'Descrição', ['class' => 'control-label']) !!}
            {!! Form::textArea('descricao', null, ['class' => 'form-control', 'id' => 'descricao']) !!}
        </div>
    </div>
</div>