<?php namespace TIOp\Domains\EscalaSobreaviso\Providers;

use Codecasts\Support\Domain\ServiceProvider;
use TIOp\Domains\EscalaSobreaviso\Contracts;
use TIOp\Domains\EscalaSobreaviso\Repositories;
/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'sobreaviso';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\EscalaSobreavisoRepository::class => Repositories\EscalaSobreavisoRepository::class,
    ];

    protected $migrations = [

    ];

    protected $seeders = [
    ];

    protected $factories = [

    ];
}
