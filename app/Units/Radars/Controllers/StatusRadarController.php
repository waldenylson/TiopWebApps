<?php namespace TIOp\Units\Radars\Controllers;

use Codecasts\Support\Http\Controller;
use TIOp\Domains\Radars\Contracts\ApiRadarRepository as StatusRadarRepository;

class StatusRadarController extends Controller
{
    protected $statusRadarRepository;

    public function __construct(StatusRadarRepository $repository)
    {
        $this->statusRadarRepository = $repository;
    }

    public function updateStatus($sic, $porta, $status)
    {
        $result = $this->statusRadarRepository->updateStatusRadar($sic, $porta, $status);

        if ($result)
        {
            return response('ok', 200);
        }

        return response('Erro', 400);
    }
}
