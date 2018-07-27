<?php namespace TIOp\Domains\Radars\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\Radars\Contracts;
use TIOp\Domains\Radars\Repositories;
use TIOp\Domains\Radars\Database\Factories\RadarFactory;
use TIOp\Domains\Radars\Database\Seeders\RadarsSeeder;

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
        Contracts\ApiRadarRepository::class => Repositories\ApiRadarRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [
        RadarsSeeder::class,
    ];

    protected $factories = [
        RadarFactory::class,
    ];
}
