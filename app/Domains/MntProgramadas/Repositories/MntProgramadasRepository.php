<?php namespace TIOp\Domains\MntProgramadas\Repositories;

use Artesaos\Warehouse\Traits\ImplementsFractal;
use TIOp\Domains\MntProgramadas\Contracts\MntProgramadasRepository as MntProgramadasRepositoryContract;
use Artesaos\Warehouse\AbstractCrudRepository;
use TIOp\Domains\MntProgramadas\MntProgramadas;
use TIOp\Units\MntProgramadas\Requests\StoreMntProgramadasPostRequest;
use Illuminate\Support\Carbon;

class MntProgramadasRepository extends AbstractCrudRepository implements MntProgramadasRepositoryContract
{
    use ImplementsFractal;

    protected $modelClass = MntProgramadas::class;

    public function listMntProgramadas()
    {
        date_default_timezone_set('UTC');

        $dados = [];

        $resultQuery = $this->modelClass::all()->load('radar')->load('efetivo');

        foreach($resultQuery as $data)
        {
            $dataFim = explode('/', $data['data_fim']);
            $horaFim = explode(':', $data['hora_fim']);
            $hoje    = Carbon::now();

            $fullDateTime = Carbon::create($dataFim[2], $dataFim[1], $dataFim[0], $horaFim[0], $horaFim[1], 00);

            if( $fullDateTime->gte($hoje) )
            {
                $dados[] = $data;
            }
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