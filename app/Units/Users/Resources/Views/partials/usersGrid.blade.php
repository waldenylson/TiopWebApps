@if(count($usuarios) > 0)
    <table class="table table-bordered table-hover table-striped datatableimplements" cellspacing="0">
        <thead>
        <tr>
            <th>POSTO/GRADUAÇÃO</th>
            <th>NOME GUERRA</th>
            <th>E-MAIL</th>
            <th>AGENDA</th>
            <th>AÇÕES</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{!! $usuario->posto_gradu !!} </td>
                <td>{!! $usuario->nome_guerra !!} </td>
                <td>{!! $usuario->email       !!} </td>
                <td>{!! $usuario->agenda      !!} </td>

                <td width="1%" nowrap>
                    <a href="{!! route('users.edit', $usuario->id) !!}" class="btn btn-primary btn-xs fancybox">
                        <i class="fa fa-pencil"></i> editar
                    </a>

                    <a href="{!! route('users.destroy', $usuario->id) !!}" class="btn btn-danger btn-xs btn-remover">
                        <i class="fa fa-remove"></i> remover
                    </a>

                    <a href="{!! route('users.index', $usuario->id) !!}" class="btn btn-success btn-xs">
                        <i class="fa fa-key"></i> Criar Login
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <h5 class="well">Nenhum usuário cadastrado ainda!</h5>
@endif