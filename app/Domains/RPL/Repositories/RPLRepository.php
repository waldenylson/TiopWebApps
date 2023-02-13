<?php namespace TIOp\Domains\RPL\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use Illuminate\Support\Facades\DB;
use TIOp\Domains\RPL\Contracts\RPLRepository as RPLRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\RPL\RPL;
use TIOp\Units\RPL\Requests\StoreRPLPostRequest;
use Illuminate\Support\Carbon;
use TIOp\Support\Carbon\Traits\Eloquent\HasDateFieldsTrait;

class RPLRepository extends AbstractCrudRepository implements RPLRepositoryContract
{
    use ImplementsFractal;
    use HasDateFieldsTrait;

    protected $modelClass = RPL::class;

    public function getRPL()
    {
        date_default_timezone_set('UTC');

        $rpl = DB::select("select r.id, r.numero, DATE_FORMAT(r.data_carga, '%d/%m/%Y') as 'dtCarga' ,
                                                  DATE_FORMAT(r.validade, '%d/%m/%Y')   as 'validade', 
                                                                               b.versao as 'BDSVer',
                                                                               r.cgna_rpl
                            from rpl r
                            inner join bds b 
                            on (r.bds_id = b.id)");

        $arrayData  = explode('/', $rpl[0]->validade);
        $hoje       = Carbon::now();

        $rplAlert['rplAlert']   = false;

        $dateObj = Carbon::create($arrayData[2], $arrayData[1], $arrayData[0], 00, 00, 00);

        if($dateObj->lte($hoje)) $rplAlert['rplAlert'] = true;

        array_push($rpl,  $rplAlert);

        return $rpl;
    }

    public function listRPL()
    {
        $rpl = DB::select("select r.id, r.numero, DATE_FORMAT(r.data_carga, '%d/%m/%Y') as 'dtCarga' ,
                                                  DATE_FORMAT(r.validade, '%d/%m/%Y')   as 'validade', 
                                                                               b.versao as 'BDSVer',
                                                                               r.cgna_rpl
                            from rpl r
                            inner join bds b 
                            on (r.bds_id = b.id)");

        return $rpl;
    }

    public function store(StoreRPLPostRequest $request)
    {
        $rpl = $this->modelClass::create($request->all());

        return $rpl;
    }

    public function edit($id)
    {
        $rpl = $this->modelClass::findOrFail($id);

        return $rpl;
    }

    public function persistUpdate(StoreRPLPostRequest $request, $id)
    {
        $rpl = $this->modelClass::findOrFail($id)->update($request->all());

        return $rpl;
    }

    public function destroy($id)
    {
        $rpl = $this->modelClass::findOrFail($id);

        return $rpl->delete();
    }

    public function manageStatusCGNA($value)
    {
        if(!is_null($value)) {
            $validadeRPL = DB::select("select validade from rpl");

            $arrayDataRPLAtual  = explode('-', $validadeRPL[0]->validade);

            $validadeRPLObj = Carbon::create(
                $arrayDataRPLAtual[0],
                $arrayDataRPLAtual[1],
                $arrayDataRPLAtual[2],
                00,
                00,
                00);

            $arrayDataRPLCGNA  = explode('-', $value);

            $rplCGNAObj = Carbon::create(
                $arrayDataRPLCGNA[2],
                $arrayDataRPLCGNA[1],
                $arrayDataRPLCGNA[0],
                00,
                00,
                00);

            if($rplCGNAObj->gt($validadeRPLObj)) {
                $result = DB::table('rpl')
                    ->update(['cgna_rpl' => 1, 'updated_at' => DB::raw('now()')]);

                return $result;
            } else {
                $result = DB::table('rpl')
                    ->update(['cgna_rpl' => 0, 'updated_at' => DB::raw('now()')]);

                return $result;
            }
        }
    }
    public function tratamentoRPLIniciado() {
        $result = DB::table('rpl')
            ->update(['cgna_rpl' => 2, 'updated_at' => DB::raw('now()')]);

        return $result;
    }



}