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
        $centro = $this->modelClass::create($request->all());

        return $centro;
    }

    public function edit($id)
    {
        $centro = $this->modelClass::findOrFail($id);

        return $centro;
    }

    public function persistUpdate(StoreCentrosPostRequest $request, $id)
    {
        $centro = $this->modelClass::findOrFail($id)->update($request->all());

        return $centro;
    }

    public function destroy($id)
    {
        $centro = $this->modelClass::findOrFail($id);

        return $centro->delete();
    }

    public function getAllCentrosForSelect()
    {
        $baseArray = $this->modelClass::all();
        $centros = array();

        foreach($baseArray as $value)
        {
            $centros[$value->id] = $value->acronimo;
        }

        return $centros;
    }
}