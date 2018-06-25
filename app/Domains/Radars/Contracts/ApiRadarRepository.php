<?php namespace TIOp\Domains\Radars\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;

/**
 *  User Interface Contracts
 */
interface ApiRadarRepository extends CrudRepository
{
    /**
     * @param $sic Código SIC radar
     * @param $canal_a  Status do canal A do radar
     * @param $canal_b  Status do canal B do radar
     * @return mixed
     */
    public function updateStatusRadar($sic = null, $canal_a = null, $canal_b = null);
}
