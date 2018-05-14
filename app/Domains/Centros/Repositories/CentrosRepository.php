<?php namespace TIOp\Domains\Centros\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\Centros\Contracts\CentrosRepository as CentrosRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\Centros\Centros;
use TIOp\Units\Centros\Requests\StoreCentrosPostRequest;

class CentrosRepository extends AbstractCrudRepository implements CentrosRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = Centros::class;

    public function listCentros()
    {
        return $this->modelClass::all();
    }

    public function store(StoreCentrosPostRequest $request)
    {
        $sistema = $this->modelClass::create($request->all());

        return $sistema;
    }

    public function edit($id)
    {
        $sistema = $this->modelClass::findOrFail($id);

        return $sistema;
    }

    public function persistUpdate(StoreCentrosPostRequest $request, $id)
    {
        $sistema = $this->modelClass::findOrFail($id)->update($request->all());

        return $sistema;
    }

    public function destroy($id)
    {
        $sistema = $this->modelClass::findOrFail($id);

        return $sistema->delete();
    }
}