<?php namespace TIOp\Units\BDS\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\BDS\Contracts\BDSRepository;
use TIOp\Units\BDS\Requests\StoreBDSPostRequest;
use TIOp\Domains\SistemasCentros\Contracts\SistemasCentrosRepository;

class BDSController extends Controller
{
    protected $bdsRepository;
    protected $sistemasCentrosRepository;

    public function __construct(BDSRepository             $repository,
                                  SistemasCentrosRepository $sistemasCentrosRepository)
    {
        $this->bdsRepository             = $repository;
        $this->sistemasCentrosRepository = $sistemasCentrosRepository;
    }

    public function index()
    {
        $bds = $this->bdsRepository->listBDS();

        //dd($bds);

        return view('bds::index')->with(compact('bds'));
    }

    public function create()
    {
        $sistemasAssociados = $this->sistemasCentrosRepository->getAllSistemasCentrosForSelect();

        return view('bds::create')->with(compact('sistemasAssociados'));
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StorebdsPostRequest $request
     * @return Response
     */
    public function store(StoreBDSPostRequest $request)
    {
        $result = $this->bdsRepository->store($request);

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
        $bds = $this->bdsRepository->edit($id);
        $sistemasAssociados = $this->sistemasCentrosRepository->getAllSistemasCentrosForSelect();

        return view('bds::edit')->with(compact('bds'))->with(compact('sistemasAssociados'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreBDSPostRequest $request, $id)
    {
        $result = $this->bdsRepository->persistUpdate($request, $id);

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
        $result = $this->bdsRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
