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
        <div class="col-md-2">
            {!! Form::label('numero', 'Número', ['class' => 'control-label']) !!}
            {!! Form::text('numero', null, ['class' => 'form-control', 'id' => 'numero']) !!}
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-2">
            <div class="form-group">
                {!! Form::label('validade', 'Validade', ['class' => 'control-label']) !!}
                <div class="input-group date datepicker">
                    {!! Form::text('validade', null, ['class' => 'form-control masked-date-input', 'id' => 'validade']) !!}
                    <span class="input-group-addon">
                        <span class="fa fa-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>