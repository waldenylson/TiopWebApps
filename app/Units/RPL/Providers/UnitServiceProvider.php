<?php namespace TIOp\Units\RPL\Providers;

use Codecasts\Support\Units\ServiceProvider;

class UnitServiceProvider extends ServiceProvider
{
    protected $alias = 'rpl';

    protected $hasViews = true;

    protected $hasTranslations = true;

    protected $providers = [
        RouteServiceProvider::class,
    ];
}
