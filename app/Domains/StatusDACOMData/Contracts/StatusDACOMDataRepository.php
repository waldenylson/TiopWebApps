<?php namespace TIOp\Domains\StatusDACOMData\Contracts;

use Artesaos\Warehouse\Contracts\Segregated\CrudRepository;

/**
 *  User Interface Contracts
 */
interface StatusDACOMDataRepository extends CrudRepository
{
    public function getStatus();
    public function updateStatus($value);
}
