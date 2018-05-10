<?php namespace TIOp\Units\Centros\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\Centros\Contracts\CentrosRepository;
use TIOp\Units\Centros\Requests\StoreCentrosPostRequest;

class CentrosController extends Controller
{
    /**
     * @var RadarRepository
     */
    protected $centrosRepository;

    /**
     * Create a new controller instance.
     *
     * @param RadarRepository $repository
     */
    public function __construct(CentrosRepository $repository)
    {
        $this->centrosRepository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centros = $this->centrosRepository->listCentros();

        return view('centros::index')->with(compact('centros'));
    }

    /**
     *  Carrega o formulário de cadastro de radar
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('centros::create');
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StoreCentrosPostRequest $request
     * @return Response
     */
    public function store(StoreCentrosPostRequest $request)
    {
        $result = $this->centrosRepository->store($request);

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
        $centro = $this->centrosRepository->edit($id);

        return view('centros::edit')->with(compact('centro'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreCentrosPostRequest $request, $id)
    {
        $result = $this->centrosRepository->persistUpdate($request, $id);

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
        $result = $this->centrosRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
