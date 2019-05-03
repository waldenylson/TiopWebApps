<?php namespace TIOp\Domains\Centros\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\Centros\Requests\StoreCentrosPostRequest;

/**
 *  User Interface Contracts
 */
interface CentrosRepository extends CrudRepository
{
    public function listCentros();
    public function store(StoreCentrosPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreCentrosPostRequest $request, $id);
    public function destroy($id);
    public function getAllCentrosForSelect();
}
