<?php namespace TIOp\Units\Dashboard\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\SistemasCentros\Contracts\SistemasCentrosRepository;


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
        ["nome" => "SO R1 EDUARDO",    "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
        ["nome" => "SO FABIO",         "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
        ["nome" => "SO KLEBER",        "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
        ["nome" => "1S MUNIZ",         "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
        ["nome" => "1S ENRIQUE",       "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
        ["nome" => "2S MELO",          "motivo" => "TESTE SISTEMA",      "retorno" => "20/07/2018"],
        ["nome" => "3S EUDES",         "motivo" => "DISPENSADO", "retorno" => "30/05/2018"],
        ["nome" => "3S WALDENYLSON",   "motivo" => "FÉRIAS",     "retorno" => "25/06/2018"],
        ["nome" => "3S REHILSON",      "motivo" => "HARF",       "retorno" => "31/12/2018"],
        ["nome" => "3S RODRIGO SOUZA", "motivo" => "MISSÃO",     "retorno" => "25/05/2018"],
        ["nome" => "3S VAREJÃO",       "motivo" => "SERVIÇO",    "retorno" => "15/04/2018"],
    ];

    protected $scRepository;

    public function __construct(SistemasCentrosRepository $scRepository)
    {
        $this->scRepository = $scRepository;
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
        return json_encode($this->scRepository->listSistemasCentros());
    }
}