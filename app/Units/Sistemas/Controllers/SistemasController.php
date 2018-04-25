<?php namespace TIOp\Units\Sistemas\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\Sistemas\Contracts\SistemasRepository;
use TIOp\Units\Radars\Requests\StoreSistemasPostRequest;

class SistemasController extends Controller
{
    /**
     * @var RadarRepository
     */
    protected $sistemaRepository;

    /**
     * Create a new controller instance.
     *
     * @param RadarRepository $repository
     */
    public function __construct(SistemasRepository $repository)
    {
        $this->sistemaRepository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sistemas = $this->sistemaRepository->listSistemas();

        return view('sistemas::index')->with(compact('sistemas'));
    }

    /**
     *  Carrega o formulário de cadastro de radar
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('sistemas::create');
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StoreSistemasPostRequest $request
     * @return Response
     */
    public function store(StoreSistemasPostRequest $request)
    {
        $result = $this->sistemaRepository->store($request);

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
        $sistema = $this->sistemaRepository->edit($id);

        return view('sistemas::edit')->with(compact('sistema'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreSistemasPostRequest $request, $id)
    {
        $result = $this->sistemaRepository->persistUpdate($request, $id);

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
        $result = $this->sistemaRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
