<?php namespace TIOp\Domains\RPL\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\RPL\Contracts;
use TIOp\Domains\RPL\Repositories;
/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'rpl';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\RPLRepository::class => Repositories\RPLRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [
    ];

    protected $factories = [

    ];
}
