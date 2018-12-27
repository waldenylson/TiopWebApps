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
    {!! Form::hidden('efetivo_id', null, ['class' => 'form-control', 'id' => 'efetivo_id', 'placeholder' => 'Lançado por']) !!}
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('radar_id', 'RADAR', ['class' => 'control-label']) !!}
            {!! !empty($mntProg) ? Form::select('radar_id', $radares, $mntProg->radar_id,
                                            ['class' => 'form-control', 'id' => 'radar_id'])
                                    : Form::select('radar_id', $radares, null,
                                            ['class' => 'form-control', 'id' => 'radar_id'])
            !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('localidade', 'Localidade', ['class' => 'control-label']) !!}
            {!! Form::text('localidade', null, ['class' => 'form-control', 'id' => 'localidade', 'placeholder' => 'Localidade']) !!}
        </div>
        <div class="col-md-4">
            {!! Form::label('motivo', 'MOTIVO', ['class' => 'control-label']) !!}
            {!! Form::text('motivo', null, ['class' => 'form-control', 'id' => 'motivo', 'placeholder' => 'Motivo']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::label('data_ini', 'Data Início', ['class' => 'control-label']) !!}
                <div class="input-group date datepicker">
                    {!! Form::text('data_ini', null, ['class' => 'form-control masked-date-input', 'id' => 'data_ini', 'placeholder'=> 'Data Início']) !!}
                    <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::label('hora_ini', 'Hora Início', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('hora_ini', null, ['class' => 'form-control masked-time-input', 'id' => 'hora_ini']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::label('data_fim', 'Data Final', ['class' => 'control-label']) !!}
                <div class="input-group date datepicker">
                    {!! Form::text('data_fim', null, ['class' => 'form-control masked-date-input', 'id' => 'data_fim', 'placeholder'=> 'Data Final']) !!}
                    <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::label('hora_fim', 'Hora Final', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('hora_fim', null, ['class' => 'form-control masked-time-input', 'id' => 'hora_fim']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-8">
            {!! Form::label('observacoes', 'Observações', ['class' => 'control-label']) !!}
            {!! Form::textArea('observacoes', null, ['class' => 'form-control', 'id' => 'observacoes']) !!}
        </div>
    </div>
</div>