<?php namespace TIOp\Units\SistemasCentros\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\Centros\Centros;
use TIOp\Domains\Sistemas\Sistemas;
use TIOp\Domains\SistemasCentros\Contracts\SistemasCentrosRepository;
use TIOp\Units\SistemasCentros\Requests\StoreSistemasCentrosPostRequest;

class SistemasCentrosController extends Controller
{
    /**
     * @var RadarRepository
     */
    protected $sistemasCentrosRepository;

    /**
     * Create a new controller instance.
     *
     * @param RadarRepository $repository
     */
    public function __construct(SistemasCentrosRepository $repository)
    {
        $this->sistemasCentrosRepository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sistemasCentros = $this->sistemasCentrosRepository->listSistemasCentros();

        return view('sc::index')->with(compact('sistemasCentros'));
    }

    /**
     *  Carrega o formulário de cadastro de radar
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $sistemas = Sistemas::all();
        $centros  = Centros::all();

        return view('sc::create')->with(compact('sistemas'))->with(compact('centros'));
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StoreSistemasCentrosPostRequest $request
     * @return Response
     */
    public function store(StoreSistemasCentrosPostRequest $request)
    {
        $result = $this->sistemasCentrosRepository->store($request);

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
        $centro = $this->sistemasCentrosRepository->edit($id);

        return view('sc::edit')->with(compact('centro'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreSistemasCentrosPostRequest $request, $id)
    {
        $result = $this->sistemasCentrosRepository->persistUpdate($request, $id);

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
        $result = $this->sistemasCentrosRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
