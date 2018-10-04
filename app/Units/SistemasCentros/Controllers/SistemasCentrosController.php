<?php namespace TIOp\Units\SistemasCentros\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\Centros\Contracts\CentrosRepository;
use TIOp\Domains\Sistemas\Contracts\SistemasRepository;
use TIOp\Domains\SistemasCentros\Contracts\SistemasCentrosRepository;
use TIOp\Units\SistemasCentros\Requests\StoreSistemasCentrosPostRequest;

class SistemasCentrosController extends Controller
{
    private $true  = 1;
    private $false = 0;

    protected $sistemasCentrosRepository;
    protected $centrosRepository;
    protected $sistemasRepository;


    public function __construct(SistemasCentrosRepository $repository,
                                  CentrosRepository       $centrosRepository,
                                  SistemasRepository      $sistemasRepository)
    {
        $this->sistemasCentrosRepository = $repository;
        $this->centrosRepository         = $centrosRepository;
        $this->sistemasRepository        = $sistemasRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sc = $this->sistemasCentrosRepository->listSistemasCentros();

        return view('sc::index')->with(compact('sc'));
    }

    /**
     *  Carrega o formulário de cadastro de radar
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $sistemas = $this->sistemasRepository->getAllSistemasForSelect();
        $centros  = $this->centrosRepository->getAllCentrosForSelect();

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
        $sistemas = $this->sistemasRepository->getAllSistemasForSelect();
        $centros  = $this->centrosRepository->getAllCentrosForSelect();

        $sistemaCentro = $this->sistemasCentrosRepository->edit($id);

        //dd($sistemaCentro);

        return view('sc::edit')->with(compact('sistemaCentro'))
                                     ->with(compact('sistemas'))
                                     ->with(compact('centros'));
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
