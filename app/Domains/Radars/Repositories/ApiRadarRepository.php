<?php namespace TIOp\Domains\Radars\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use Illuminate\Support\Facades\DB;
use TIOp\Domains\Radars\Contracts\ApiRadarRepository as ApiRadarRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;

class ApiRadarRepository extends AbstractCrudRepository implements ApiRadarRepositoryContract
{
    use ImplementsFractal;

    private $canais = [
        'canal_a',
        'canal_b',
    ];

    /**
     * @param $sic
     * @param $porta
     * @param $status
     * @return mixed
     */
    public function updateStatusRadar($sic, $porta, $status)
    {
        $status = ($status == 0 ? 'ino' : 'ope');

        if(isset($sic))
        {
            $radar = DB::table('radares')->where('sic', $sic)->first();

            if(!empty($radar))
            {
                $radar->canal_a == $porta ? DB::table('status_radar')->where('radar_id', $radar->id)->update(['canal_a' => $status]):
                                            DB::table('status_radar')->where('radar_id', $radar->id)->update(['canal_b' => $status]);
            }

        }

        return null;
    }
}