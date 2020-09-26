<?php namespace TIOp\Units\Dashboard\Controllers;

use Codecasts\Support\Http\Controller;

use Illuminate\Support\Facades\DB;

use TIOp\Domains\EscalaSobreaviso\Contracts\EscalaSobreavisoRepository;
use TIOp\Domains\MntProgramadas\Contracts\MntProgramadasRepository;
use TIOp\Domains\RPL\Contracts\RPLRepository;
use TIOp\Domains\SistemasCentros\Contracts\SistemasCentrosRepository;
use TIOp\Domains\StatusDACOMData\Contracts\StatusDACOMDataRepository;


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


    protected $scRepository;
    protected $rplRepository;
    protected $sobreavisoRepository;
    protected $mntProgRepository;
    protected $statusDACOMDataRepository;
    protected $usersRepository;

    public function __construct(SistemasCentrosRepository $scRepository,
                                RPLRepository $rplRepository,
                                EscalaSobreavisoRepository $sobreavisoRepository,
                                MntProgramadasRepository $mntProgRepository,
                                StatusDACOMDataRepository $statusDACOMDataRepository
                                )
    {
        $this->scRepository  = $scRepository;
        $this->rplRepository = $rplRepository;

        $this->sobreavisoRepository = $sobreavisoRepository;
        $this->mntProgRepository    = $mntProgRepository;

        $this->statusDACOMDataRepository = $statusDACOMDataRepository;

    }

    public function index()
    {
        $radares     = $this->radares;

        return view('dashboard::sinoptico')->with(compact('radares'));
    }

    public function getRadarsStatus()
    {
        return json_encode($this->radares, JSON_UNESCAPED_UNICODE);
    }

    public function getEfetivoTiop()
    {
        return json_encode($this->efetivoTiop, JSON_UNESCAPED_UNICODE);
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

    public function getMntProgTeste()
    {
        $dados = $this->mntProgRepository->listMntProgramadasTeste();

        return json_encode($dados, JSON_UNESCAPED_UNICODE);
    }

    public function getStatusDACOM()
    {
        $dados = $this->statusDACOMDataRepository->getStatus();

        return json_encode($dados, JSON_UNESCAPED_UNICODE);
    }
}