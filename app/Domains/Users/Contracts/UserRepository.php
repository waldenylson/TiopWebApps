<?php namespace TIOp\Domains\Users\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\Users\Requests\StoreUsersPostRequest;

/**
 *  User Interface Contracts
 */
interface UserRepository extends CrudRepository
{
    public function listUsers();
    public function findSingleUser($id);
    public function store(StoreUsersPostRequest $request);
    public function edit($id);
    public function persistUpdate(StoreUsersPostRequest $request, $id);
    public function destroy($id);
    public function getAllUsersForSelect();
}
