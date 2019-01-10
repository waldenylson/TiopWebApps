<?php namespace TIOp\Domains\EscalaSobraviso\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\EscalaSobraviso\Contracts\EscalaSobravisoRepository as EscalaSobravisoRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\EscalaSobraviso\EscalaSobraviso;
use TIOp\Units\EscalaSobraviso\Requests\StoreEscalaSobravisoPostRequest;

class EscalaSobravisoRepository extends AbstractCrudRepository implements EscalaSobravisoRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = EscalaSobraviso::class;

    public function listEscalaSobraviso()
    {
        return $this->modelClass::all();
    }

    public function store(StoreEscalaSobravisoPostRequest $request)
    {
        $centro = $this->modelClass::create($request->all());

        return $centro;
    }

    public function edit($id)
    {
        $centro = $this->modelClass::findOrFail($id);

        return $centro;
    }

    public function persistUpdate(StoreEscalaSobravisoPostRequest $request, $id)
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