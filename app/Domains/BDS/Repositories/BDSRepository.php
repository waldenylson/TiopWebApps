<?php namespace TIOp\Domains\BDS\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\BDS\Contracts\BDSRepository as BDSRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\BDS\BDS;
use TIOp\Units\BDS\Requests\StoreBDSPostRequest;

class BDSRepository extends AbstractCrudRepository implements BDSRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = BDS::class;

    public function listBDS()
    {
        return $this->modelClass::all();
    }

    public function store(StoreBDSPostRequest $request)
    {
        $bds = $this->modelClass::create($request->all());

        return $bds;
    }

    public function edit($id)
    {
        $bds = $this->modelClass::findOrFail($id);

        return $bds;
    }

    public function persistUpdate(StoreBDSPostRequest $request, $id)
    {
        $bds = $this->modelClass::findOrFail($id)->update($request->all());

        return $bds;
    }

    public function destroy($id)
    {
        $bds = $this->modelClass::findOrFail($id);

        return $bds->delete();
    }
}