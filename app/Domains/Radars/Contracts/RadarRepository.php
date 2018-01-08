<?php namespace TIOp\Domains\Radars\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\Radars\Requests\StoreRadarsPostRequest;

/**
 *  User Interface Contracts
 */
interface RadarRepository extends CrudRepository
{
    public function listRadars();
    public function store(StoreRadarsPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreRadarsPostRequest $request, $id);
    public function destroy($id);

}
