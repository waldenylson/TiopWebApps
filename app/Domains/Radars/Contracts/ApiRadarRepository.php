<?php namespace TIOp\Domains\Radars\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;

/**
 *  User Interface Contracts
 */
interface ApiRadarRepository extends CrudRepository
{
    public function updateStatusRadar($radar, $canal_a, $canal_b);
}
