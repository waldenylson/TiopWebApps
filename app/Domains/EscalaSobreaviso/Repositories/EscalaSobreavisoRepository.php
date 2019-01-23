<?php namespace TIOp\Domains\EscalaSobreaviso\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\EscalaSobreaviso\Contracts\EscalaSobreavisoRepository as EscalaSobreavisoRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\EscalaSobraviso\EscalaSobraviso;
use TIOp\Units\EscalaSobreaviso\Requests\StoreEscalaSobreavisoPostRequest;

class EscalaSobreavisoRepository extends AbstractCrudRepository implements EscalaSobreavisoRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass  = EscalaSobraviso::class;

    public function listEscalaSobreaviso()
    {
        //return $this->modelClass::all();
        return "Teste dentro sobreaviso";
    }

    public function store(StoreEscalaSobreavisoPostRequest $request)
    {
        $centro = $this->modelClass::create($request->all());

        return $centro;
    }

    public function edit($id)
    {
        $centro = $this->modelClass::findOrFail($id);

        return $centro;
    }

    public function persistUpdate(StoreEscalaSobreavisoPostRequest $request, $id)
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