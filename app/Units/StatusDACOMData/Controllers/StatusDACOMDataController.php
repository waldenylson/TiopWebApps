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

    public function updateStatus($value)
    {
        $result = ($value == 2) ? $this->statusDACOMDataRepository->updateStatus(1) :
                                  $this->statusDACOMDataRepository->updateStatus(0);

        if($result) return response('Sucesso', 200);

        return response('Falha DB!', 500);
    }
}
