<?php namespace TIOp\Domains\MntProgramadas\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use DateTime;
use Illuminate\Support\Facades\DB;
use TIOp\Domains\MntProgramadas\Contracts\MntProgramadasRepository as MntProgramadasRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\MntProgramadas\MntProgramadas;
use TIOp\Support\Carbon\Traits\Eloquent\HasDateFieldsTrait;
use TIOp\Units\MntProgramadas\Requests\StoreMntProgramadasPostRequest;
use Illuminate\Support\Carbon;

class MntProgramadasRepository extends AbstractCrudRepository implements MntProgramadasRepositoryContract
{
    use ImplementsFractal;
    use HasDateFieldsTrait;

    protected $modelClass = MntProgramadas::class;

    private function parseDateToBR($value)
    {
        if(!is_null($value)) return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    private function parseHoraToBRMin($value)
    {
        if(!is_null($value)) return substr($value, 0, 5);
    }

    public function listMntProgramadas()
    {
        date_default_timezone_set('UTC');

        $dados = [];

        $baseResult = DB::table('mnt_programadas')
            ->selectRaw('mnt_programadas.id, radares.id as radarID, radares.nome as radarNome, 
                         data_ini, data_fim,hora_ini,hora_fim, motivo')
            ->whereRaw('data_fim >= current_date')
            ->orderByRaw('data_ini')
            ->orderByRaw('data_fim')
            ->orderByRaw('hora_ini')
            ->orderByRaw('hora_fim')
            ->join('efetivo_tiop', 'mnt_programadas.efetivo_id', 'efetivo_tiop.id')
            ->join('radares', 'mnt_programadas.radar_id', 'radares.id')
            ->take(12)
        ->get();

        foreach ($baseResult as $key => $data)
        {
           $dados[] = $data;

            $dados[$key]->data_ini = $this->parseDateToBR($data->data_ini);
            $dados[$key]->data_fim = $this->parseDateToBR($data->data_fim);
            $dados[$key]->hora_ini = $this->parseHoraToBRMin($data->hora_ini);
            $dados[$key]->hora_fim = $this->parseHoraToBRMin($data->hora_fim);
        }

        return $dados;
    }

    public function listAllMntProgramadas()
    {
        date_default_timezone_set('UTC');

        $dados = [];

        $baseResult = DB::table('mnt_programadas')
            ->selectRaw('mnt_programadas.id, radares.id as radarID, radares.nome as radarNome, 
                         data_ini, data_fim,hora_ini,hora_fim, motivo')
            ->whereRaw('data_fim >= current_date')
            ->orderByRaw('data_ini')
            ->orderByRaw('data_fim')
            ->orderByRaw('hora_ini')
            ->orderByRaw('hora_fim')
            ->join('efetivo_tiop', 'mnt_programadas.efetivo_id', 'efetivo_tiop.id')
            ->join('radares', 'mnt_programadas.radar_id', 'radares.id')
            ->get();

        foreach ($baseResult as $key => $data)
        {
            $dados[] = $data;

            $dados[$key]->data_ini = $this->parseDateToBR($data->data_ini);
            $dados[$key]->data_fim = $this->parseDateToBR($data->data_fim);
            $dados[$key]->hora_ini = $this->parseHoraToBRMin($data->hora_ini);
            $dados[$key]->hora_fim = $this->parseHoraToBRMin($data->hora_fim);
        }

        return $dados;
    }

    public function store(StoreMntProgramadasPostRequest $request)
    {
        $mntProg = $this->modelClass::create($request->all());

        return $mntProg;
    }

    public function edit($id)
    {
        $mntProg = $this->modelClass::findOrFail($id);

        return $mntProg;
    }

    public function persistUpdate(StoreMntProgramadasPostRequest $request, $id)
    {
        $mntProg = $this->modelClass::findOrFail($id)->update($request->all());

        return $mntProg;
    }

    public function destroy($id)
    {
        $mntProg = $this->modelClass::findOrFail($id);

        return $mntProg->delete();
    }
}