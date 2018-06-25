<?php namespace TIOp\Domains\Radars\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use Illuminate\Support\Facades\DB;
use TIOp\Domains\Radars\Contracts\ApiRadarRepository as ApiRadarRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;

class ApiRadarRepository extends AbstractCrudRepository implements ApiRadarRepositoryContract
{
    use ImplementsFractal;

    private $result;

    /**
     * @param $sic Código SIC radar
     * @param $canal_a  Status do canal A do radar
     * @param $canal_b  Status do canal B do radar
     * @return mixed
     */
    public function updateStatusRadar($sic = null, $canal_a = null, $canal_b = null)
    {
        if(isset($sic))
        {
            $radar = DB::table('radares')->where('sic', $sic)->first();

            if(!empty($radar))
            {
                $this->result = DB::table('status_radar')->where('radar_id', $radar->id)->update([
                    'canal_a'    => $canal_a,
                    'canal_b'    => $canal_b,
                ]);
            }

        }

        return $this->result;
    }
}