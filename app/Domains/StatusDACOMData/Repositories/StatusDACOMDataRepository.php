<?php namespace TIOp\Domains\StatusDACOMData\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use Illuminate\Support\Facades\DB;
use TIOp\Domains\StatusDACOMData\Contracts\StatusDACOMDataRepository as StatusDACOMDataRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\StatusDACOMData\StatusDACOMData;

class StatusDACOMDataRepository extends AbstractCrudRepository implements StatusDACOMDataRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass = StatusDACOMData::class;

    public function getStatus()
    {
        $dados = $this->modelClass::all();

        return $dados;

    }

    public function updateStatus($value)
    {
        $result = DB::table('status_copia_dacom')->where('id', 1)->update(['status' => $value, 'updated_at' => DB::raw('now()')]);

        return $result;
    }

}