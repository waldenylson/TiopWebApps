<?php namespace TIOp\Domains\Users\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\Users\Contracts\UserRepository as UserRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\Users\EfetivoTiop;
use TIOp\Units\Users\Requests\StoreUsersPostRequest;

class UserRepository extends AbstractCrudRepository implements UserRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass = EfetivoTiop::class;

    public function listUsers()
    {
        $user = $this->modelClass::all();

        return $user;
    }

    public function store(StoreUsersPostRequest $request)
    {
        $user = $this->modelClass::create($request->all());

        return $user;
    }

    public function edit($id)
    {
        $user = $this->modelClass::findOrFail($id);

        return $user;
    }

    public function persistUpdate(StoreUsersPostRequest $request, $id)
    {
        $user = $this->modelClass::findOrFail($id)->update($request->all());

        return $user;
    }

    public function destroy($id)
    {
        $user = $this->modelClass::findOrFail($id);

        return $user->delete();
    }

    public function getAllUsersForSelect()
    {
        $baseArray = $this->modelClass::all();
        $users = array();

        foreach($baseArray as $value)
        {
            $users[$value->id] = $value->posto_gradu . $value->nome_guerra;
        }

        return $users;
    }
}