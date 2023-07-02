<?php namespace TIOp\Domains\PAPI\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use TIOp\Domains\PAPI\Contracts\PAPIRepository as PAPIRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\PAPI\PAPI;

class PAPIRepository extends AbstractCrudRepository implements PAPIRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass = PAPI::class;

    public function managePAPIStatusData(Request $request)
    {



        if (!is_null($request)) {

            //dd($value);
            DB::table('papi_status')->update([
                'status_mysql' => $request->MySQL,
                'brilho_atual' => $request->brilho,
                'operacao' => $request->remoto,
                'status_papi' => $request->status,
                'updated_at' => DB::raw('now()')
            ]);

        }
    }

    public function getPAPIInfo()
    {
        $papiInfo = DB::select("select papi.brilho_atual as 'brilho', papi.status_mysql as 'database', 
                        papi.operacao, papi.status_papi as 'status', DATE_FORMAT(papi.updated_at, '%d/%m/%Y %H:%i') as 'updated'
                        from papi_status papi");

        return $papiInfo;
    }
}