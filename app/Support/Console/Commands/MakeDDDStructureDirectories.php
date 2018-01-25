<?php namespace TIOp\Support\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;


class MakeDDDStructureDirectories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:DDD-DirectoriesTree {domainName?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make DDD Directories tree';

    protected $domainDirectories = [
        'Contracts',
        'Database/Factories',
        'Database/Migrations',
        'Database/Seeders',
        'Presenters',
        'Providers',
        'Repositories',
        'Transformers',
    ];

    protected $unitDirectories = [
        'Controllers',
        'Providers',
        'Resources/Views/js',
        'Resources/Views/css',
        'Resources/Views/partials',
        'Routes',
        'VueComponents',
    ];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach ($this->domainDirectories as $domainDirectory)
        {
            Storage::disk('appDomains')->put($this->argument('domainName') . '/' . $domainDirectory . '/.gitkeep', '');
        }

        foreach ($this->unitDirectories as $unityDirectory)
        {
            Storage::disk('appUnits')->put($this->argument('domainName') . '/' . $unityDirectory . '/.gitkeep', '');
        }
    }
}

