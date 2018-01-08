<?php namespace TIOp\Domains\Users\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\Users\Database\Factories\UserFactory;
use TIOp\Domains\Users\Database\Migrations\CreateUsersTable;
use TIOp\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use TIOp\Domains\Users\Database\Seeders\UsersSeeder;
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

    protected $migrations = [
        CreateUsersTable::class,
        CreatePasswordResetsTable::class,
    ];

    protected $seeders = [
        UsersSeeder::class,
    ];

    protected $factories = [
        UserFactory::class,
    ];
}
