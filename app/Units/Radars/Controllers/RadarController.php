<?php namespace TIOp\Units\Radars\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\Radars\Contracts\RadarRepository;
use TIOp\Units\Radars\Requests\StoreRadarsPostRequest;

class RadarController extends Controller
{
    /**
     * @var RadarRepository
     */
    protected $radarRepository;

    /**
     * Create a new controller instance.
     *
     * @param RadarRepository $repository
     */
    public function __construct(RadarRepository $repository)
    {
        $this->radarRepository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $radares = $this->radarRepository->listRadars();

        return view('radars::index')->with(compact('radares'));
    }

    /**
     *  Carrega o formulário de cadastro de radar
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('radars::create');
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function store(StoreRadarsPostRequest $request)
    {
        $result = $this->radarRepository->store($request);

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
        $radar = $this->radarRepository->edit($id);

        return view('radars::edit')->with(compact('radar'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreRadarsPostRequest $request, $id)
    {
        $result = $this->radarRepository->persistUpdate($request, $id);

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
        $result = $this->radarRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
