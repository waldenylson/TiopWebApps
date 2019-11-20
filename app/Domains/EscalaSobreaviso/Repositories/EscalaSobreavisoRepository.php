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
        $result = DB::table('escala_sobreaviso')
            ->where('efetivo_id', $efetivo_id)
            ->where('mes', $mes)
            ->where('ano', $ano)
        ->get();

        return count($result);
    }

    public function getSobreavisoDia()
    {
        date_default_timezone_set('America/Recife');

        $hora = date('H');

        $sobreaviso = [];

        if( ( (int)$hora >= 0) and ( (int)$hora < 8) )
        {
            $dia = ( (date('d') - 1) == 0 ) ? '01' : (date('d') - 1);

            if ( ((int)$dia >= 1) && ((int)$dia <= 9) ) $dia = ('0' . $dia);

            $sobreaviso = DB::table('escala_sobreaviso')
                ->join('efetivo_tiop', 'escala_sobreaviso.efetivo_id', 'efetivo_tiop.id')
                ->where('dias', 'like', '%'.$dia.'%')
                ->where('mes', date('n'))
                ->where('ano', date('Y'))
            ->get();
        }
        else
        {
            $dia = date('d');

            $sobreaviso = DB::table('escala_sobreaviso')
                ->join('efetivo_tiop', 'escala_sobreaviso.efetivo_id', 'efetivo_tiop.id')
                ->where('dias', 'like', '%'.$dia.'%')
                ->where('mes', date('n'))
                ->where('ano', date('Y'))
            ->get();
        }

        return $sobreaviso;
    }
}