<?php namespace TIOp\Units\PAPI\Controllers;

use Codecasts\Support\Http\Controller;
use Illuminate\Http\Request;
use TIOp\Domains\PAPI\Contracts\PAPIRepository;

class PAPIController extends Controller
{
    private $PAPIRepository;

    public function __construct(PAPIRepository $repository)
    {
        $this->PAPIRepository = $repository;
    }

    public function managePAPIStatusData(Request $request)
    {
        $result = $this->PAPIRepository->managePAPIStatusData($request);
    }

    public function getPAPIInfo()
    {
        $result = $this->PAPIRepository->getPAPIInfo();

        return $result;
    }
}
