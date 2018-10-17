<?php namespace TIOp\Units\Users\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Units\Users\Requests\StoreUsersPostRequest;

class UsersController extends Controller
{


    public function index()
    {
        $usuarios =  [];

        //dd($Users);

        return view('users::index')->with(compact('usuarios'));
    }

    public function create()
    {
        return view('users::create');
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StoreUsersPostRequest $request
     * @return Response
     */
    public function store(StoreUsersPostRequest $request)
    {
        $result = $this->UsersRepository->store($request);

        if ($result)
        {
            return redirect()->back()->with('message', 'Registro Inserido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Inserir o Registro!');
    }


    /**
     *  Mostra o formulário para edição de um registro.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $Users = $this->UsersRepository->edit($id);
        $bdsCadastradas = $this->bdsRepository->getBDSForSelect();

        return view('Users::edit')->with(compact('Users'))->with(compact('bdsCadastradas'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreUsersPostRequest $request, $id)
    {
        $result = $this->UsersRepository->persistUpdate($request, $id);

        if ($result)
        {
            return redirect()->back()->with('message', 'Registro Alterado com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Alterar o Registro!');
    }


    /**
     * Remove um registro especifico do Banco.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $result = $this->UsersRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
