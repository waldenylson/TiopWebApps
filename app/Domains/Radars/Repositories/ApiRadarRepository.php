<?php namespace TIOp\Domains\Radars\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
//use Illuminate\Support\Facades\DB;
use TIOp\Domains\Radars\Contracts\ApiRadarRepository as ApiRadarRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\Radars\StatusRadar;
use TIOp\Domains\Radars\Radar;

class ApiRadarRepository extends AbstractCrudRepository implements ApiRadarRepositoryContract
{
    use ImplementsFractal;

    protected $statusModelClass = StatusRadar::class;
    protected $radarModelClass  = Radar::class;

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
            $teste_post = [$sic, $porta, $status];

            //$radar = DB::table('radares')->where('sic', $sic)->first();
            $radar = $this->radarModelClass::where('sic', 'teste')->first();

            if(!empty($radar))
            {
//                $result = ($radar->canal_a == $porta ? DB::table('status_radar')->where('radar_id', $radar->id)->update(['canal_a' => $status]):
//                                            DB::table('status_radar')->where('radar_id', 20)->update(['canal_b' => $status]));

                $result = ($radar->canal_a == $porta ?  $this->statusModelClass::findOrFail($radar->id)->update(['canal_a' => $status]) :
                                                        $this->statusModelClass::findOrFail($radar->id)->update(['canal_b' => $status]));

                //dd($result);
            }
        }

        return !empty($result) ? $result: $teste_post;
    }
}