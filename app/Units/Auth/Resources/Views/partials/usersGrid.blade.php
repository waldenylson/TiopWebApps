@if(count($usuarios) > 0)
    <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
        <thead>
        <tr>
            <th>POSTO/GRADUAÇÃO</th>
            <th>NOME GUERRA</th>
            <th>LOGIN</th>
            <th>SEÇÃO</th>
            <th>AÇÕES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{!! $usuario->pgr_codigo      !!} </td>
                <td>{!! $usuario->usu_nomeguerra  !!} </td>
                <td>{!! $usuario->usu_login       !!} </td>
                <td>{!! $usuario->set_codigo      !!} </td>

                <td width="1%" nowrap>
                    <a href="{!! route('seguranca.makeRelacao', strtolower($usuario->usu_login)) !!}" class="btn btn-primary btn-xs">
                        <i class="fa fa-fw fa-pencil"></i> Adicionar Usuário
                    </a>

                    <a href="{!! route('seguranca.destroyRelacao', strtolower($usuario->usu_login)) !!}" class="btn btn-danger btn-xs btn-remover">
                        <i class="fa fa-fw fa-remove"></i> Remover Usuário
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <h5 class="well">Não foi Possível Carregar os Usuários!</h5>
@endif