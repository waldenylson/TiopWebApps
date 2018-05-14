<?php namespace TIOp\Domains\Centros\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\Centros\Contracts;
use TIOp\Domains\Centros\Repositories;
/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'centros';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\CentrosRepository::class => Repositories\CentrosRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [
    ];

    protected $factories = [

    ];
}
