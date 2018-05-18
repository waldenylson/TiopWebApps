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
            {!! Form::label('sistema_centro_id', 'Nome', ['class' => 'control-label']) !!}
            {!! Form::text('nome', null, ['class' => 'form-control', 'id' => 'nome', 'autofocus' => '']) !!}
        </div>

        <div class="col-md-2">
            {!! Form::label('natureza_missao_id', 'Natureza Missão', ['class' => 'control-label']) !!}
            {!! !empty($requisicao) ? Form::select('natureza_missao_id', $naturezas, $requisicao->natureza_missao_id,
                                            ['class' => 'form-control', 'id' => 'natureza_missao_id'])
                                    : Form::select('natureza_missao_id', $naturezas, null,
                                            ['class' => 'form-control', 'id' => 'natureza_missao_id'])
            !!}
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