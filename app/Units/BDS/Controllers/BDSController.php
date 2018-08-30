<?php namespace TIOp\Units\BDS\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\BDS\Contracts\BDSRepository;
use TIOp\Units\BDS\Requests\StoreBDSPostRequest;

class BDSController extends Controller
{
    /**
     * @var RadarRepository
     */
    protected $bdsRepository;

    /**
     * Create a new controller instance.
     *
     * @param RadarRepository $repository
     */
    public function __construct(BDSRepository $repository)
    {
        $this->bdsRepository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bds = $this->bdsRepository->listBDS();

        return view('bds::index')->with(compact('bds'));
    }

    /**
     *  Carrega o formulário de cadastro de radar
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('bds::create');
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
        $centro = $this->bdsRepository->edit($id);

        return view('bds::edit')->with(compact('centro'));
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
