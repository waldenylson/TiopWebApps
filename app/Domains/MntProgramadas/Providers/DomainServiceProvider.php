<?php namespace TIOp\Domains\MntProgramadas\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\MntProgramadas\Contracts;
use TIOp\Domains\MntProgramadas\Repositories;
/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'mntProgramadas';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\MntProgramadasRepository::class => Repositories\MntProgramadasRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [
    ];

    protected $factories = [

    ];
}
