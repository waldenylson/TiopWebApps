<?php namespace TIOp\Domains\StatusDACOMData\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\StatusDACOMData\Contracts;
use TIOp\Domains\StatusDACOMData\Repositories;
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
        Contracts\StatusDACOMDataRepository::class => Repositories\StatusDACOMDataRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [
    ];

    protected $factories = [

    ];
}
