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
        // TODO: Implement listRadars() method.
    }

    public function store(StoreRadarsPostRequest $request)
    {
        // TODO: Implement store() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function persistUpdate(StoreRadarsPostRequest $request, $id)
    {
        // TODO: Implement persistUpdate() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}