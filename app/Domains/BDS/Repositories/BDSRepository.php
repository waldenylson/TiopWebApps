<?php namespace TIOp\Domains\BDS\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;///
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use TIOp\Domains\BDS\Contracts\BDSRepository as BDSRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\BDS\BDS;
use TIOp\Units\BDS\Requests\StoreBDSPostRequest;

class BDSRepository extends AbstractCrudRepository implements BDSRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = BDS::class;

    public function listBDS()
    {
        return $this->modelClass::all()->load('sistema_centro');

        $data = DB::select("select b.id as 'id', b.versao as 'BDSVer', b.data_atualizacao as 'BDSUpdateDate', s.nome as 'SNome', s.versao as 'SVersao' from bds b
                    inner join sistemas_centros sc on (b.sistema_centro_id = sc.id)
                    inner join sistemas s on (sc.sistema_id = s.id)");

        return $data;
    }

    public function store(StoreBDSPostRequest $request)
    {
        $bds = $this->modelClass::create($request->all());

        return $bds;
    }

    public function edit($id)
    {
        $bds = $this->modelClass::findOrFail($id);

        return $bds;
    }

    public function persistUpdate(StoreBDSPostRequest $request, $id)
    {
        $bds = $this->modelClass::findOrFail($id)->update($request->all());

        return $bds;
    }

    public function destroy($id)
    {
        $bds = $this->modelClass::findOrFail($id);

        return $bds->delete();
    }
}