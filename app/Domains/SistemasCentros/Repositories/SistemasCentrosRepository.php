<?php namespace TIOp\Domains\SistemasCentros\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\SistemasCentros\Contracts\SistemasCentrosRepository as SistemasCentrosRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\SistemasCentros\SistemasCentros;
use TIOp\Units\SistemasCentros\Requests\StoreSistemasCentrosPostRequest;

class SistemasCentrosRepository extends AbstractCrudRepository implements SistemasCentrosRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = SistemasCentros::class;

    public function listSistemasCentros()
    {
        return $this->modelClass::all();
    }

    public function store(StoreSistemasCentrosPostRequest $request)
    {
        $sistemasCentros = $this->modelClass::create($request->all());

        return $sistemasCentros;
    }

    public function edit($id)
    {
        $sistemasCentros = $this->modelClass::findOrFail($id);

        return $sistemasCentros;
    }

    public function persistUpdate(StoreSistemasCentrosPostRequest $request, $id)
    {
        $sistemasCentros = $this->modelClass::findOrFail($id)->update($request->all());

        return $sistemasCentros;
    }

    public function destroy($id)
    {
        $sistemasCentros = $this->modelClass::findOrFail($id);

        return $sistemasCentros->delete();
    }
}