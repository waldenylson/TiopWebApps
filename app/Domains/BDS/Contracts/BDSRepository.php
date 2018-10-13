<?php namespace TIOp\Domains\BDS\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\BDS\Requests\StoreBDSPostRequest;

/**
 *  User Interface Contracts
 */
interface BDSRepository extends CrudRepository
{
    public function listBDS();
    public function store(StoreBDSPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreBDSPostRequest $request, $id);
    public function destroy($id);
    public function getBDSForSelect();
}
