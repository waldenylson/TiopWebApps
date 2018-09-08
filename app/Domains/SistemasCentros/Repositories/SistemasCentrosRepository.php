<?php namespace TIOp\Domains\SistemasCentros\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use Illuminate\Support\Facades\DB;
use TIOp\Domains\SistemasCentros\Contracts\SistemasCentrosRepository as SistemasCentrosRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\SistemasCentros\SistemasCentros;
use TIOp\Units\SistemasCentros\Requests\StoreSistemasCentrosPostRequest;

class SistemasCentrosRepository extends AbstractCrudRepository implements SistemasCentrosRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass       = SistemasCentros::class;

    public function listSistemasCentros()
    {
        return $this->modelClass::all()->load('sistema', 'centro');

//        $data = DB::select(
//            'select s.nome as "Sistema", s.versao as "Versão",c.nome as "Centro", c.acronimo as "Sigla"
//             from sistemas s
//             inner join sistemas_centros sc on (s.id = sc.sistema_id)
//             inner join centros c on (c.id = sc.centro_id)');
//
//        return $data;
    }

    public function store(StoreSistemasCentrosPostRequest $request)
    {
        $sistemasCentros = $this->modelClass::create($request->all());

        return $sistemasCentros;
    }

    public function edit($id)
    {
        $sistemasCentros = $this->modelClass::findOrFail($id);

        return $sistemasCentros;
    }

    public function persistUpdate(StoreSistemasCentrosPostRequest $request, $id)
    {
        $sistemasCentros = $this->modelClass::findOrFail($id)->update($request->all());

        return $sistemasCentros;
    }

    public function destroy($id)
    {
        $sistemasCentros = $this->modelClass::findOrFail($id);

        return $sistemasCentros->delete();
    }

    /**
     * @return array
     *
     *  Retorna lista de dados para compor combobox/select
     *  do cadastro de BDS.
     */
    public function getAllSistemasCentrosForSelect()
    {
        $baseArray = $this->modelClass::all()->load('sistema', 'centro');
        $centrosAssociados = array();

        foreach($baseArray as $value)
        {
            $centrosAssociados[$value->id] = $value->centro->acronimo . ' => ' .
                                             $value->sistema->nome    . ' v' .
                                             $value->sistema->versao;
        }

        return $centrosAssociados;
    }

    public function getSistemasCentrosRelacionados($id)
    {
        return $this->modelClass::findOrFail($id)->load('sistema');
    }

    public function getSistemasCentrosRelacionadosBDS($id)
    {
        return $this->modelClass::findOrFail($id)->load('sistema', 'centro');
    }
}