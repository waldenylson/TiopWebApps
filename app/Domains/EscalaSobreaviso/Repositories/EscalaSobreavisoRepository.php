<?php namespace TIOp\Domains\EscalaSobreaviso\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use TIOp\Domains\EscalaSobreaviso\Contracts\EscalaSobreavisoRepository as EscalaSobreavisoRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\EscalaSobreaviso\EscalaSobreaviso;
use TIOp\Units\EscalaSobreaviso\Requests\StoreEscalaSobreavisoPostRequest;

class EscalaSobreavisoRepository extends AbstractCrudRepository implements EscalaSobreavisoRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass  = EscalaSobreaviso::class;

    public function listEscalaSobreaviso()
    {
        return $this->modelClass::all()->load('efetivoTiop');
    }

    public function store(StoreEscalaSobreavisoPostRequest $request)
    {
        $check = $this->checkEscalaCadastrada($request->efetivo_id, $request->mes, $request->ano);

        if(!$check)
        {
            $sobreaviso = $this->modelClass::create($request->all());

            return 1;
        }

        return 0; //ja está cadastrado o mes e o ano p/ o usuario...
    }

    public function edit($id)
    {
        $sobreaviso = $this->modelClass::findOrFail($id);

        return $sobreaviso;
    }

    public function persistUpdate(StoreEscalaSobreavisoPostRequest $request, $id)
    {
        $sobreaviso = $this->modelClass::findOrFail($id)->update($request->all());

        return $sobreaviso;
    }

    public function destroy($id)
    {
        $sobreaviso = $this->modelClass::findOrFail($id);

        return $sobreaviso->delete();
    }

    private function checkEscalaCadastrada($efetivo_id, $mes, $ano)
    {
        $result = DB::table('escala_sobreaviso')->where('efetivo_id', $efetivo_id)
                                                ->where('mes', $mes)
                                                ->where('ano', $ano)->get();

        return count($result);
    }

    public function getSobreavisoDia()
    {
//        $data = DB::table('escala_sobreaviso')->where('mes', date('m'))
//                                               ->where('ano', date('Y'))->get();

        $data = DB::select('');

        dd($data);



    }
}