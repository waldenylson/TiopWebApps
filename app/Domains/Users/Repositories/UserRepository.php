<?php namespace TIOp\Domains\Users\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\Users\Contracts\UserRepository as UserRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\Users\User;
use TIOp\Units\Users\Requests\StoreUsersPostRequest;

class UserRepository extends AbstractCrudRepository implements UserRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass = User::class;

    public function listUsers()
    {
        // TODO: Implement listUsers() method.
    }

    public function store(StoreUsersPostRequest $request)
    {
        // TODO: Implement store() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function persistUpdate(StoreUsersPostRequest $request, $id)
    {
        // TODO: Implement persistUpdate() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}