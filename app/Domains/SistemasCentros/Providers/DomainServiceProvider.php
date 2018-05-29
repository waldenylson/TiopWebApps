<?php namespace TIOp\Domains\SistemasCentros\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\SistemasCentros\Contracts;
use TIOp\Domains\SistemasCentros\Repositories;
/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'SistemasCentros';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\SistemasCentrosRepository::class => Repositories\SistemasCentrosRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [
    ];

    protected $factories = [

    ];
}
