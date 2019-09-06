<?php namespace TIOp\Units\StatusDACOMData\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\StatusDACOMData\Contracts\StatusDACOMDataRepository;

class StatusDACOMDataController extends Controller
{
    private $statusDACOMDataRepository;

    public function __construct(StatusDACOMDataRepository $repository)
    {
        $this->statusDACOMDataRepository = $repository;
    }

    /**
     * @param $server Integer Servidor que primário ou secundária
     * @param $value Integer Status da cópia dos dados pelo servidor | 2 => OK
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function updateStatus($server, $value)
    {
        $result = ($value == 2) ? $this->statusDACOMDataRepository->updateStatus($server, 1) :
                                  $this->statusDACOMDataRepository->updateStatus($server, 0);

        if($result) return response('Sucesso', 200);

        return response('Falha DB!', 500);
    }
}
