<?php namespace TIOp\Domains\PAPI\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use Illuminate\Http\Request;

/**
 *  User Interface Contracts
 */
interface PAPIRepository extends CrudRepository
{
    public function managePAPIStatusData(Request $request);

    public function getPAPIInfo();
}
