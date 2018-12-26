<?php namespace TIOp\Domains\MntProgramadas\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\MntProgramadas\Requests\StoreMntProgramadasPostRequest;

/**
 *  User Interface Contracts
 */
interface MntProgramadasRepository extends CrudRepository
{
    public function listMntProgramadas();
    public function store(StoreMntProgramadasPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreMntProgramadasPostRequest $request, $id);
    public function destroy($id);
}
