<?php namespace TIOp\Domains\Radars\Repositories;

use TIOp\Domains\Radars\Contracts\RadarRepository as RadarRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\Radars\Transformers\RadarTransformer;
use TIOp\Domains\Radars\Radar;

class RadarRepository extends AbstractCrudRepository implements RadarRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = Radar::class;
    protected $transformerClass = RadarTransformer::class;

}