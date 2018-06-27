<?php namespace TIOp\Domains\Radars\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;

/**
 *  User Interface Contracts
 */
interface ApiRadarRepository extends CrudRepository
{
    /**
     * @param $sic
     * @param $porta
     * @param $status
     * @return mixed
     */
    public function updateStatusRadar($sic, $porta, $status);
}
