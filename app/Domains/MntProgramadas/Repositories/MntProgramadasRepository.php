<?php namespace TIOp\Domains\MntProgramadas\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\MntProgramadas\Contracts\MntProgramadasRepository as MntProgramadasRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\MntProgramadas\MntProgramadas;
use TIOp\Units\MntProgramadas\Requests\StoreMntProgramadasPostRequest;

class MntProgramadasRepository extends AbstractCrudRepository implements MntProgramadasRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = MntProgramadas::class;

    public function listMntProgramadas()
    {
        return $this->modelClass::all();
    }

    public function store(StoreMntProgramadasPostRequest $request)
    {
        $centro = $this->modelClass::create($request->all());

        return $centro;
    }

    public function edit($id)
    {
        $centro = $this->modelClass::findOrFail($id);

        return $centro;
    }

    public function persistUpdate(StoreMntProgramadasPostRequest $request, $id)
    {
        $centro = $this->modelClass::findOrFail($id)->update($request->all());

        return $centro;
    }

    public function destroy($id)
    {
        $centro = $this->modelClass::findOrFail($id);

        return $centro->delete();
    }
}