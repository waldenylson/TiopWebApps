<?php namespace TIOp\Units\EscalaSobreaviso\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\EscalaSobreaviso\Contracts\EscalaSobreavisoRepository;
use TIOp\Domains\EscalaSobreaviso\EscalaSobreaviso;
use TIOp\Domains\Users\Contracts\UserRepository;
use TIOp\Units\EscalaSobreaviso\Requests\StoreEscalaSobreavisoPostRequest;

class EscalaSobreavisoController extends Controller
{

    private $meses = [
        '1'  => 'Janeiro',
        '2'  => 'Fevereiro',
        '3'  => 'Março',
        '4'  => 'Abril',
        '5'  => 'Maio',
        '6'  => 'Junho',
        '7'  => 'Julho',
        '8'  => 'Agosto',
        '9'  => 'Setembro',
        '10' => 'Outubro',
        '11' => 'Novembro',
        '12' => 'Dezembro',
    ];


    /**
     * @var RadarRepository
     */
    protected $escalaSobreavisoRepository, $usersRepository;

    /**
     * Create a new controller instance.
     *
     * @param RadarRepository $repository
     */
    public function __construct(EscalaSobreavisoRepository $repository, UserRepository $userRepository)
    {
        $this->escalaSobreavisoRepository = $repository;
        $this->usersRepository = $userRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escalaSobreaviso = $this->escalaSobreavisoRepository->listEscalaSobreaviso();


        return view('sobreaviso::index')->with(compact('escalaSobreaviso'));
    }

    /**
     *  Carrega o formulário de cadastro de radar
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($id)
    {
        $user  = $this->usersRepository->findSingleUser($id);
        $meses = $this->meses;

        return view('sobreaviso::create')->with(compact('user'))->with(compact('meses'));
    }

    /**
     * Persiste os dados no Banco
     *
     * @param StoreMntProgramadasPostRequest $request
     * @return Response
     */
    public function store(StoreEscalaSobreavisoPostRequest $request)
    {
        $result = $this->escalaSobreavisoRepository->store($request);


        return ($result == 0) ? redirect()->back()->with('error', 'Já existe uma Escala Cadastrada para este Mês!') :
                         redirect()->back()->with('message', 'Registro Inserido com Sucesso!');


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
        $sobreaviso = $this->escalaSobreavisoRepository->edit($id);

        $user  = $this->usersRepository->findSingleUser($id);
        $meses = $this->meses;

        return view('sobreaviso::edit')->with(compact('sobreaviso'))
                                             ->with(compact('user'))
                                             ->with(compact('meses'));
    }


    /**
     * Persiste os dados alterados no Banco
     *
     * @param StoreRadarsPostRequest $request
     * @return Response
     */
    public function update(StoreEscalaSobreavisoPostRequest $request, $id)
    {
        $result = $this->escalaSobreavisoRepository->persistUpdate($request, $id);

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
        $result = $this->escalaSobreavisoRepository->destroy($id);

        if ($result) {
            return redirect()->back()->with('message', 'Registro Removido com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Remover o Registro!');
    }
}
