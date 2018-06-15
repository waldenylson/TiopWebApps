<?php namespace TIOp\Domains\Radars\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\Radars\Contracts\ApiRadarRepository as ApiRadarRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\Radars\Radar;

class ApiRadarRepository extends AbstractCrudRepository implements ApiRadarRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = Radar::class;


}