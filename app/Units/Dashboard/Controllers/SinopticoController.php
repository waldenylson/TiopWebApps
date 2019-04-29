<?php namespace TIOp\Units\Dashboard\Controllers;

use Codecasts\Support\Http\Controller;;

use TIOp\Domains\EscalaSobreaviso\Contracts\EscalaSobreavisoRepository;
use TIOp\Domains\MntProgramadas\Contracts\MntProgramadasRepository;
use TIOp\Domains\RPL\Contracts\RPLRepository;
use TIOp\Domains\SistemasCentros\Contracts\SistemasCentrosRepository;
use Carbon\Carbon;


class SinopticoController extends Controller
{
    private $radares = [
        ['nome' => 'CAG', 'status' => 'ino'],
        ['nome' => 'CNF', 'status' => 'ope'],
        ['nome' => 'COU', 'status' => 'ope'],
        ['nome' => 'FLT', 'status' => 'ope'],
        ['nome' => 'FLZ', 'status' => 'ino'],
        ['nome' => 'GAM', 'status' => 'ope'],
        ['nome' => 'IMP', 'status' => 'ope'],
        ['nome' => 'LPA', 'status' => 'ope'],
        ['nome' => 'MCO', 'status' => 'ope'],
        ['nome' => 'MST', 'status' => 'ope'],
        ['nome' => 'NOR', 'status' => 'ope'],
        ['nome' => 'NTL', 'status' => 'ope'],
        ['nome' => 'NTT', 'status' => 'ope'],
        ['nome' => 'PSG', 'status' => 'ope'],
        ['nome' => 'PTL', 'status' => 'ope'],
        ['nome' => 'REC', 'status' => 'ope'],
        ['nome' => 'SFA', 'status' => 'ope'],
        ['nome' => 'SLU', 'status' => 'ope'],
        ['nome' => 'STA', 'status' => 'ope'],
        ['nome' => 'SVL', 'status' => 'ope'],
        ['nome' => 'SVS', 'status' => 'ope'],
        ['nome' => 'TMA', 'status' => 'ope'],
        ['nome' => 'TRS', 'status' => 'ope'],
        ['nome' => 'VIT', 'status' => 'deg'],
    ];

    private $efetivoTiop = [
//        ["nome" => "SO R1 EDUARDO",    "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
//        ["nome" => "SO JOTA",          "motivo" => "TESTE SISTEMA",      "retorno" => "22/07/2018"],
//        ["nome" => "SO FABIO",         "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
//        ["nome" => "SO KLEBER",        "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
//        ["nome" => "1S MUNIZ",         "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
//        ["nome" => "SO HENRIQUE",      "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
//        ["nome" => "1S MELO",          "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
//        ["nome" => "2S EUDES",         "motivo" => "TESTE SISTEMA",      "retorno" => "30/05/2018"],
//        ["nome" => "2S WALDENYLSON",   "motivo" => "TESTE SISTEMA",      "retorno" => "25/06/2018"],
//        ["nome" => "2S REHILSON",      "motivo" => "TESTE SISTEMA",      "retorno" => "31/12/2018"],
//        ["nome" => "2S RODRIGO SOUZA", "motivo" => "TESTE SISTEMA",      "retorno" => "25/05/2018"],
//        ["nome" => "3S VAREJÃO",       "motivo" => "TESTE SISTEMA",      "retorno" => "15/04/2018"],
    ];

    protected $scRepository;
    protected $rplRepository;
    protected $sobreavisoRepository;
    protected $mntProgRepository;

    public function __construct(SistemasCentrosRepository $scRepository,
                                RPLRepository $rplRepository,
                                EscalaSobreavisoRepository $sobreavisoRepository,
                                MntProgramadasRepository $mntProgRepository)
    {
        $this->scRepository  = $scRepository;
        $this->rplRepository = $rplRepository;

        $this->sobreavisoRepository = $sobreavisoRepository;
        $this->mntProgRepository    = $mntProgRepository;

    }

    public function index()
    {
        $radares     = $this->radares;
        $efetivoTiop = $this->efetivoTiop;

        return view('dashboard::sinoptico')->with(compact('radares'))->with(compact('efetivoTiop'));
    }

    public function getRadarsStatus()
    {
        return json_encode($this->radares);
    }

    public function getEfetivoTiop()
    {
        return json_encode($this->efetivoTiop);
    }

    public function getInfSistemasData()
    {
        return json_encode($this->scRepository->infSistemas(), JSON_UNESCAPED_UNICODE);
    }

    public function getRPLInfo()
    {
        return json_encode($this->rplRepository->getRPL(), JSON_UNESCAPED_UNICODE);
    }

    public function getSobreaviso()
    {
        return json_encode($this->sobreavisoRepository->getSobreavisoDia(), JSON_UNESCAPED_UNICODE);
    }

    public function getMntProg()
    {
        $dados = $this->mntProgRepository->listMntProgramadas();

        return json_encode($dados, JSON_UNESCAPED_UNICODE);
    }
}