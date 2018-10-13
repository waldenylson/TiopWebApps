<?php namespace TIOp\Domains\RPL\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\RPL\Requests\StoreRPLPostRequest;

/**
 *  RPL Interface Contracts
 */
interface RPLRepository extends CrudRepository
{
    public function listRPL();
    public function store(StoreRPLPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreRPLPostRequest $request, $id);
    public function destroy($id);

}
