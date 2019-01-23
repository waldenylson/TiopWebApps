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
            {!! !empty($svcMilitarSobreaviso) ? Form::select('sistema_id', $sistemas, $svcMilitarSobreaviso->efetivo_id,
                                            ['class' => 'form-control', 'id' => 'sistema_id'])
                                    : Form::select('sistema_id', $sistemas, null,
                                            ['class' => 'form-control', 'id' => 'sistema_id'])
            !!}
        </div>

        <div class="col-md-2">
            {!! Form::label('militar', 'Militar', ['class' => 'control-label']) !!}
            {!!
                Form::text('militar', $user->posto_gradu . ' ' .
                                      $user->especialidade . ' ' .
                                      $user->nome_guerra, ['class' => 'form-control', 'id' => 'descricao'])
            !!}
        </div>
    </div>
</div>