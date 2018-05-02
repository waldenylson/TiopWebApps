<?php namespace TIOp\Domains\Sistemas\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\Sistemas\Contracts;
use TIOp\Domains\Sistemas\Repositories;
/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'sistemas';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\SistemasRepository::class => Repositories\SistemasRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [
    ];

    protected $factories = [

    ];
}
