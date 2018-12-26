<?php namespace TIOp\Domains\Centros\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\Centros\Requests\StoreMntProgramadasPostRequest;

/**
 *  User Interface Contracts
 */
interface CentrosRepository extends CrudRepository
{
    public function listCentros();
    public function store(StoreMntProgramadasPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreMntProgramadasPostRequest $request, $id);
    public function destroy($id);
    public function getAllCentrosForSelect();
}
