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
            {!! Form::label('versao', 'Versão', ['class' => 'control-label']) !!}
            {!! Form::text('versao', null, ['class' => 'form-control', 'id' => 'versao']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-7">
            {!! Form::label('descricao', 'Descrição', ['class' => 'control-label']) !!}
            {!! Form::textArea('descricao', null, ['class' => 'form-control', 'id' => 'descricao']) !!}
        </div>
    </div>
</div>