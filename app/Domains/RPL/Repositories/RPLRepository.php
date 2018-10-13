<?php namespace TIOp\Domains\RPL\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use Illuminate\Support\Facades\DB;
use TIOp\Domains\RPL\Contracts\RPLRepository as RPLRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\RPL\RPL;
use TIOp\Units\RPL\Requests\StoreRPLPostRequest;

class RPLRepository extends AbstractCrudRepository implements RPLRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass = RPL::class;

    public function listRPL()
    {
        $rpl = DB::select("select r.id, r.numero, DATE_FORMAT(r.data_carga, '%d/%m/%Y') as 'dtCarga' ,
                                                  DATE_FORMAT(r.validade, '%d/%m/%Y') as 'validade', 
                                  b.versao as 'BDSVer' from rpl r
                           inner join bds b on (r.bds_id = b.id)");

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
}