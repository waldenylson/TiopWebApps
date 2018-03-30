<?php namespace TIOp\Units\Dashboard\Controllers;

use Codecasts\Support\Http\Controller;


class SinopticoController extends Controller
{
    private $radares = [
        ['nome' => 'CAG', 'status' => 'ope'],
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
        ['nome' => 'VIT', 'status' => 'ope'],
    ];

    public function index()
    {
        $radares = $this->radares;

        return view('dashboard::sinoptico')->with(compact('radares'));;


    }
}