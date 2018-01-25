<?php namespace TIOp\Units\Radars\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\Radars\Contracts\RadarRepository;
use TIOp\Units\Radars\Requests\StoreRadarsPostRequest;

/**
 * Class DashboardController.
 */
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
        return view('radars::index');
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
}
