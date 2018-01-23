<?php namespace TIOp\Domains\Radars\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\Radars\Contracts;
use TIOp\Domains\Radars\Repositories;
/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'radars';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\RadarRepository::class => Repositories\RadarRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [

    ];

    protected $factories = [

    ];
}
