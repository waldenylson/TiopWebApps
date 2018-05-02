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
        $radar = $this->modelClass::create($request->all());

        return $radar;
    }

    public function edit($id)
    {
        $radar = $this->modelClass::findOrFail($id);

        return $radar;
    }

    public function persistUpdate(StoreSistemasPostRequest $request, $id)
    {
        $radar = $this->modelClass::findOrFail($id)->update($request->all());

        return $radar;
    }

    public function destroy($id)
    {
        $radar = $this->modelClass::findOrFail($id);

        return $radar->delete();
    }
}