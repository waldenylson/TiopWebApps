<?php namespace TIOp\Domains\Sistemas\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\Sistemas\Requests\StoreSistemasPostRequest;

/**
 *  User Interface Contracts
 */
interface SistemasRepository extends CrudRepository
{
    public function listSistemas();
    public function store(StoreSistemasPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreSistemasPostRequest $request, $id);
    public function destroy($id);
    public function getAllSistemasForSelect();
}
