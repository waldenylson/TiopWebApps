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
            {!! Form::label('sistema_id', 'Sistema', ['class' => 'control-label']) !!}
            {!! !empty($sistemaCentro) ? Form::select('sistema_id', $sistemas, $sistemaCentro->sistema_id,
                                            ['class' => 'form-control', 'id' => 'sistema_id'])
                                    : Form::select('sistema_id', $sistemas, null,
                                            ['class' => 'form-control', 'id' => 'sistema_id'])
            !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('sistema_id', 'Centro', ['class' => 'control-label']) !!}
            {!! !empty($sistemaCentro) ? Form::select('sistema_id', $centros, $sistemaCentro->centro_id,
                                            ['class' => 'form-control', 'id' => 'centro_id'])
                                    : Form::select('centro_id', $centros, null,
                                            ['class' => 'form-control', 'id' => 'centro_id'])
            !!}
        </div>
        <div class="col-md-2">
            {!! Form::label(null, 'Produção', ['class' => 'control-label']) !!}
            <div class="div-producao-container">
                <div class="div-producao">
                    {!! Form::radio('producao', 1, true) !!}
                    &nbsp;SIM
                    <br>
                    {!! Form::radio('producao', 0, false) !!}
                    &nbsp;NÃO
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .div-producao {
        float: left;
    }
</style>