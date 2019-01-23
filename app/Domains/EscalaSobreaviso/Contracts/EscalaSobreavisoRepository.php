<?php namespace TIOp\Domains\EscalaSobreaviso\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\EscalaSobreaviso\Requests\StoreEscalaSobreavisoPostRequest;

/**
 *  User Interface Contracts
 */
interface EscalaSobreavisoRepository extends CrudRepository
{
    public function listEscalaSobreaviso();
    public function store(StoreEscalaSobreavisoPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreEscalaSobreavisoPostRequest $request, $id);
    public function destroy($id);
}
