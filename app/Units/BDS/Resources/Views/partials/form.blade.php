@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
{{--{{ dd($bds) }}--}}

<div class="form-group well">
    <div class="row">
        <div class="col-md-4">
            {!! Form::label('sistema_centro_id', 'Sistema/Centro Referência', ['class' => 'control-label']) !!}

            {{--{{ dd($sistemasAssociados) }}--}}

            {!! !empty($bds) ? Form::select('sistema_centro_id', $sistemasAssociados, $bds->sistema_centro_id,
                                            ['class' => 'form-control', 'id' => 'sistema_centro_id'])
                                    : Form::select('sistema_centro_id', $sistemasAssociados, null,
                                            ['class' => 'form-control', 'id' => 'sistema_centro_id'])
            !!}
        </div>

        <div class="col-md-2">
            {!! Form::label('versao', 'Versão', ['class' => 'control-label']) !!}
            {!! Form::text('versao', null, ['class' => 'form-control', 'id' => 'versao']) !!}
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::label('data_atualizacao', 'Data Atualização', ['class' => 'control-label']) !!}
                <div class="input-group date datepicker">
                    {!! Form::text('data_atualizacao', null, ['class' => 'form-control masked-date-input', 'id' => 'data_atualizacao']) !!}
                    <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-8">
            {!! Form::label('descricao', 'Descrição', ['class' => 'control-label']) !!}
            {!! Form::textArea('descricao', null, ['class' => 'form-control', 'id' => 'descricao']) !!}
        </div>
    </div>
</div>