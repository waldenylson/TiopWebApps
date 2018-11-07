<?php namespace TIOp\Domains\Users\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\Users\Contracts;
use TIOp\Domains\Users\Repositories;

/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'users';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\UserRepository::class => Repositories\UserRepository::class,
    ];

    protected $migrations = [];

    protected $seeders = [];

    protected $factories = [];
}
