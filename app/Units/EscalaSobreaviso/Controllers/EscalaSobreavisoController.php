<?php namespace TIOp\Units\EscalaSobreaviso\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\EscalaSobreaviso\Contracts\EscalaSobreavisoRepository;
use TIOp\Units\EscalaSobreaviso\Requests\StoreEscalaSobreavisoPostRequest;

class EscalaSobreavisoController extends Controller
{
    /**
     * @var RadarRepository
     */
    protected $EscalaSobreavisoRepository;

    /**
     * Create a new controller instance.
     *
     * @param RadarRepository $repository
     */
    public function __construct(EscalaSobreavisoRepository $repository)
    {
        $this->EscalaSobreavisoRepository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EscalaSobreaviso = $this->EscalaSobreavisoRepository->listEscalaSobreaviso();

        return view('EscalaSobreaviso::index')->with(compact('EscalaSobreaviso'));
    }

    /**
     *  Carrega o formulário de cadastro de radar
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('EscalaSobreaviso::create');
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StoreMntProgramadasPostRequest $request
     * @return Response
     */
    public function store(StoreEscalaSobreavisoPostRequest $request)
    {
        $result = $this->EscalaSobreavisoRepository->store($request);

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
        $centro = $this->EscalaSobreavisoRepository->edit($id);

        return view('EscalaSobreaviso::edit')->with(compact('centro'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreEscalaSobreavisoPostRequest $request, $id)
    {
        $result = $this->EscalaSobreavisoRepository->persistUpdate($request, $id);

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
        $result = $this->EscalaSobreavisoRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
