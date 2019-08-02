<?php namespace TIOp\Domains\MntProgramadas;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use TIOp\Domains\Radars\Radar;
use TIOp\Domains\Users\EfetivoTiop;
use TIOp\Support\Carbon\Traits\Eloquent\HasDateFieldsTrait;

class MntProgramadas extends Model
{
    use HasDateFieldsTrait;

    protected $table = 'mnt_programadas';

    protected $guarded = ['_token'];

    /**
     *  Mutator para salvar o objeto Carbon válido
     *  no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function setDataIniAttribute($value)
    {
        if(!is_null($value)) $this->attributes['data_ini'] = $this->valueToCarbonObject($value);
    }

    public function setDataFimAttribute($value)
    {
        if(!is_null($value)) $this->attributes['data_fim'] = $this->valueToCarbonObject($value);
    }

    /**
     *  Acessor para transformar a data em um um objeto Carbon válido
     *  para ser salvo no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function getDataIniAttribute($value)
    {
        if(!is_null($value)) return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    public function getDataFimAttribute($value)
    {
        if(!is_null($value)) return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    public function getHoraIniAttribute($value)
    {
        if(!is_null($value)) return substr($value, 0, 5);
    }

    public function getHoraFimAttribute($value)
    {
        if(!is_null($value)) return substr($value, 0, 5);
    }

    public function radar()
    {
        return $this->hasOne(Radar::class, 'id', 'radar_id');
    }

    public function efetivo()
    {
        return $this->hasOne(EfetivoTiop::class, 'id', 'efetivo_id');
    }

}
