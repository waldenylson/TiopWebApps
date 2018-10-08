<?php namespace TIOp\Units\RPL\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\RPL\Contracts\RPLRepository;
use TIOp\Units\RPL\Requests\StoreRPLPostRequest;

class RPLController extends Controller
{
    protected $rplRepository;
    protected $sistemasCentrosRepository;

    public function __construct(RPLRepository  $repository
                                )
    {
        $this->RPLRepository             = $repository;
    }

    public function index()
    {
        $RPL = $this->RPLRepository->listRPL();

        //dd($RPL);

        return view('RPL::index')->with(compact('RPL'));
    }

    public function create()
    {
        $sistemasAssociados = $this->sistemasCentrosRepository->getAllSistemasCentrosForSelect();

        return view('RPL::create')->with(compact('sistemasAssociados'));
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StoreRPLPostRequest $request
     * @return Response
     */
    public function store(StoreRPLPostRequest $request)
    {
        $result = $this->RPLRepository->store($request);

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
        $RPL = $this->RPLRepository->edit($id);
        $sistemasAssociados = $this->sistemasCentrosRepository->getAllSistemasCentrosForSelect();

        return view('RPL::edit')->with(compact('RPL'))->with(compact('sistemasAssociados'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreRPLPostRequest $request, $id)
    {
        $result = $this->RPLRepository->persistUpdate($request, $id);

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
        $result = $this->RPLRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
