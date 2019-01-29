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
        {!! Form::hidden('efetivo_id', $user->id, ['id' => 'efetivo_id']) !!}

        <div class="col-md-2">
            {!! Form::label('militar', 'Militar', ['class' => 'control-label']) !!}
            {!!
                Form::text('militar', $user->posto_gradu   . ' ' .
                                      $user->especialidade . ' ' .
                                      $user->nome_guerra, ['class' => 'form-control', 'id' => 'descricao', 'disabled'])
            !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('mes', 'Mês', ['class' => 'control-label']) !!}
            {!! !empty($sobreaviso) ? Form::select('mes', $meses, $sobreaviso->mes,
                                            ['class' => 'form-control', 'id' => 'mes'])
                                    : Form::select('mes', $meses, null,
                                            ['class' => 'form-control', 'id' => 'mes'])
            !!}
        </div>
        <div class="col-md-1">
            {!! Form::label('ano', 'Ano', ['class' => 'control-label']) !!}
            {!! Form::text('ano', null, ['class' => 'form-control masked-year-input', 'id' => 'ano']) !!}
        </div>
    </div><br/>

    <div class="row">
        <div class="col-md-5">
            {!! Form::label('dias', 'Dias Escalados para SV', ['class' => 'control-label']) !!}
            {!! Form::text('dias', null, ['class' => 'form-control', 'id' => 'dias', 'placeholder' => 'Dias separados por vírgula...']) !!}
        </div>
    </div>
</div>