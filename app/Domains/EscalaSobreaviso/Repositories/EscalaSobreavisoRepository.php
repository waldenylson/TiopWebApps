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

        $arrContextOptions = 
            array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                ),
                "http" => array(
                    'method'=>"GET",
                    "header" => array(
                        "usuario: tiop",
                        "token: 99412a25eba2743435565074d2a1b1461"
                    )
                )
            );

        $url = "https://sistemas.cindacta3.intraer:8443/Escala/rest/escalado/escalaTIOP/516";
        
        $result = json_decode(file_get_contents($url, false, 
            stream_context_create($arrContextOptions)));
            
        $saram = substr($result[1]->escalado, -30, 7);

        if( ( (int)$hora >= 0) and ( (int)$hora < 8) )        
            $saram = substr($result[0]->escalado, -30, 7);   

        return $escalado = DB::table('efetivo_tiop')
            ->selectRaw('efetivo_tiop.agenda, efetivo_tiop.especialidade,
                         efetivo_tiop.posto_gradu, efetivo_tiop.nome_guerra')
            ->whereRaw("efetivo_tiop.saram = $saram")
        ->get();

    }
}