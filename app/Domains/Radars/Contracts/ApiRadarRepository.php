<?php namespace TIOp\Domains\Radars\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;
use TIOp\Units\Radars\Requests\StoreRadarsPostRequest;

/**
 *  User Interface Contracts
 */
interface ApiRadarRepository extends CrudRepository
{
    public function updateStatusRadar()
    {
        
    }
}
