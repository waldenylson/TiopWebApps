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
            {!! Form::label('nome_completo', 'Nome', ['class' => 'control-label']) !!}
            {!! Form::text('nome_completo', null, ['class' => 'form-control', 'id' => 'nome_completo', 'placeholder' => 'Nome Completo']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('nome_guerra', 'Nome Guerra', ['class' => 'control-label']) !!}
            {!! Form::text('nome_guerra', null, ['class' => 'form-control', 'id' => 'nome_guerra', 'placeholder' => 'Nome Guerra']) !!}
        </div>
        <div class="col-md-3">
            {!! Form::label('saram', 'Saram', ['class' => 'control-label']) !!}
            {!! Form::text('saram', null, ['class' => 'form-control', 'id' => 'saram', 'placeholder' => 'Saram']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('identidade', 'Identidade', ['class' => 'control-label']) !!}
            {!! Form::text('identidade', null, ['class' => 'form-control', 'id' => 'identidade', 'placeholder' => 'Identidade']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('quadro', 'Quadro', ['class' => 'control-label']) !!}
            {!! Form::text('quadro', null, ['class' => 'form-control', 'id' => 'quadro', 'placeholder' => 'Quadro']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('especialidade', 'Especialidade', ['class' => 'control-label']) !!}
            {!! Form::text('especialidade', null, ['class' => 'form-control', 'id' => 'especialidade', 'placeholder' => 'Especialidade']) !!}
        </div>
        <div class="col-md-1">
            {!! Form::label('agenda', 'Agenda', ['class' => 'control-label']) !!}
            {!! Form::text('agenda', null, ['class' => 'form-control', 'id' => 'agenda', 'placeholder' => 'Agenda']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('celular', 'Celular', ['class' => 'control-label']) !!}
            {!! Form::text('celular', null, ['class' => 'form-control masked-cel-phone', 'id' => 'celular']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('cpf', 'CPF', ['class' => 'control-label']) !!}
            {!! Form::text('cpf', null, ['class' => 'form-control', 'id' => 'cpf', 'placeholder' => 'CPF']) !!}
        </div>
        <div class="col-md-4">
            {!! Form::label('email', 'E-Mail', ['class' => 'control-label']) !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'E-Mail']) !!}
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {!! Form::label('data_nascimento', 'Data Nascimento', ['class' => 'control-label']) !!}
                <div class="input-group date datepicker">
                    {!! Form::text('data_nascimento', null, ['class' => 'form-control masked-date-input', 'id' => 'data_nascimento', 'placeholder'=> 'Data Nascimento']) !!}
                    <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>