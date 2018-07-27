<?php namespace TIOp\Domains\Radars\Database\Seeders;

use TIOp\Domains\Radars\Radar;
use Illuminate\Database\Seeder;


class RadarsSeeder extends Seeder
{
    public function run()
    {
        factory(Radar::class)->times(10)->create();
    }
}