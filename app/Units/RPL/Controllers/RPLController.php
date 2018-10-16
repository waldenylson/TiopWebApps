<?php namespace TIOp\Units\RPL\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\RPL\Contracts\RPLRepository;
use TIOp\Units\RPL\Requests\StoreRPLPostRequest;
use TIOp\Domains\BDS\Contracts\BDSRepository;

class RPLController extends Controller
{
    protected $rplRepository;
    protected $bdsRepository;

    public function __construct(RPLRepository  $repository,
                                BDSRepository $bdsRepository)
    {
        $this->rplRepository = $repository;
        $this->bdsRepository = $bdsRepository;
    }

    public function index()
    {
        $rpl = $this->rplRepository->listRPL();

        //dd($rpl);

        return view('rpl::index')->with(compact('rpl'));
    }

    public function create()
    {
        $bdsCadastradas = $this->bdsRepository->getBDSForSelect();

        return view('rpl::create')->with(compact('bdsCadastradas'));
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StoreUsersPostRequest $request
     * @return Response
     */
    public function store(StoreRPLPostRequest $request)
    {
        $result = $this->rplRepository->store($request);

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
        $rpl = $this->rplRepository->edit($id);
        $bdsCadastradas = $this->bdsRepository->getBDSForSelect();

        return view('rpl::edit')->with(compact('rpl'))->with(compact('bdsCadastradas'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreRPLPostRequest $request, $id)
    {
        $result = $this->rplRepository->persistUpdate($request, $id);

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
        $result = $this->rplRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
