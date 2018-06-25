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

    public function updateStatus($sic, $canal_a, $canal_b)
    {
        $result = $this->statusRadarRepository->updateStatusRadar($sic, $canal_a, $canal_b);

        if ($result)
        {
            return redirect()->back()->with('message', 'Registro Alterado com Sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao Tentar Alterar o Registro!');
    }
}
