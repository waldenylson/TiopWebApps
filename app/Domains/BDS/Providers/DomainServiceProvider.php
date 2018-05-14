<?php namespace TIOp\Domains\BDS\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\BDS\Contracts;
use TIOp\Domains\BDS\Repositories;
/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'bds';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\BDSRepository::class => Repositories\BDSRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [
    ];

    protected $factories = [

    ];
}
