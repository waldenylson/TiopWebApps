<?php namespace TIOp\Domains\Radars\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\Radars\Contracts\RadarRepository as RadarRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\Radars\Transformers\RadarTransformer;
use TIOp\Domains\Radars\Radar;
use TIOp\Units\Radars\Requests\StoreRadarsPostRequest;

class RadarRepository extends AbstractCrudRepository implements RadarRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = Radar::class;
    protected $transformerClass = RadarTransformer::class;

    public function listRadars()
    {
        return $this->modelClass::all();
    }

    public function store(StoreRadarsPostRequest $request)
    {
        $radar = $this->modelClass::create($request->all());

        return $radar;
    }

    public function edit($id)
    {
        $radar = $this->modelClass::findOrFail($id);

        return $radar;
    }

    public function persistUpdate(StoreRadarsPostRequest $request, $id)
    {
        $radar = $this->modelClass::findOrFail($id)->update($request->all());

        return $radar;
    }

    public function destroy($id)
    {
        $radar = $this->modelClass::findOrFail($id);

        return $radar->delete();
    }

    public function getAllRadaresForSelect()
    {
        $baseArray = $this->modelClass::all();
        $radares = array();

        foreach($baseArray as $value)
        {
            $radares[$value->id] = $value->nome;
        }

        return $radares;
    }
}