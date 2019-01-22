<?php namespace TIOp\Domains\EscalaSobreaviso\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\EscalaSobraviso\Requests\StoreEscalaSobravisoPostRequest;

/**
 *  User Interface Contracts
 */
interface EscalaSobreavisoRepository extends CrudRepository
{
    public function listEscalaSobraviso();
    public function store(StoreEscalaSobravisoPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreEscalaSobravisoPostRequest $request, $id);
    public function destroy($id);
}
