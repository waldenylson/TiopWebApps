<?php namespace TIOp\Domains\Sistemas\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\Sistemas\Contracts\SistemasRepository as SistemasRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\Sistemas\Sistemas;
use TIOp\Units\Sistemas\Requests\StoreSistemasPostRequest;

class SistemasRepository extends AbstractCrudRepository implements SistemasRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = Sistemas::class;

    public function listSistemas()
    {
        return $this->modelClass::all();
    }

    public function store(StoreSistemasPostRequest $request)
    {
        $sistema = $this->modelClass::create($request->all());

        return $sistema;
    }

    public function edit($id)
    {
        $sistema = $this->modelClass::findOrFail($id);

        return $sistema;
    }

    public function persistUpdate(StoreSistemasPostRequest $request, $id)
    {
        $sistema = $this->modelClass::findOrFail($id)->update($request->all());

        return $sistema;
    }

    public function destroy($id)
    {
        $sistema = $this->modelClass::findOrFail($id);

        return $sistema->delete();
    }

    public function getAllSistemasForSelect()
    {
        $baseArray = $this->modelClass::all();
        $sistemas = array();

        foreach($baseArray as $value)
        {
            $sistemas[$value->id] = $value->nome;
        }

        return $sistemas;
    }
}