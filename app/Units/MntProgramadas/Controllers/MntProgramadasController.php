<?php namespace TIOp\Units\MntProgramadas\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\MntProgramadas\Contracts\MntProgramadasRepository;
use TIOp\Domains\Radars\Contracts\RadarRepository;
use TIOp\Domains\Users\Contracts\UserRepository;
use TIOp\Units\MntProgramadas\Requests\StoreMntProgramadasPostRequest;

class MntProgramadasController extends Controller
{
    /**
     * @var RadarRepository
     */
    protected $mntProgramadasRepository;

    protected $radarRepository;
    protected $userRepository;

    /**
     * Create a new controller instance.
     *
     * @param RadarRepository $repository
     */
    public function __construct(MntProgramadasRepository $repository,
                                 RadarRepository $radarRepository,
                                 UserRepository $userRepository)
    {
        $this->mntProgramadasRepository = $repository;
        $this->radarRepository = $radarRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mntProgramadas = $this->mntProgramadasRepository->listMntProgramadas();

        dd($mntProgramadas);

        return view('mntProgramadas::index')->with(compact('mntProgramadas'));
    }

    /**
     *  Carrega o formulário de cadastro
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $radares = $this->radarRepository->getAllRadaresForSelect();

        return view('mntProgramadas::create')->with(compact('radares'));
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StoreMntProgramadasPostRequest $request
     * @return Response
     */
    public function store(StoreMntProgramadasPostRequest $request)
    {
        $result = $this->mntProgramadasRepository->store($request);

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
        $mntProg = $this->mntProgramadasRepository->edit($id);

        return view('mntProgramadas::edit')->with(compact('mntProg'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreMntProgramadasPostRequest $request, $id)
    {
        $result = $this->mntProgramadasRepository->persistUpdate($request, $id);

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
        $result = $this->mntProgramadasRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
