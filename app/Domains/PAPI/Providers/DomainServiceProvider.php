<?php namespace TIOp\Domains\PAPI\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\PAPI\Contracts;
use TIOp\Domains\PAPI\Repositories;
/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'papi';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\PAPIRepository::class => Repositories\PAPIRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [
    ];

    protected $factories = [

    ];
}
