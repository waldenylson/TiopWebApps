<?php namespace TIOp\Domains\BDS;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use TIOp\Support\Carbon\Traits\Eloquent\HasDateFieldsTrait;

class BDS extends Model
{
    use HasDateFieldsTrait;

    protected $table = 'bds';

    protected $guarded = ['_token'];

    /**
     *  Acessor para transformar a data em um um objeto Carbon válido
     *  para ser salvo no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function getLastUpdateAttribute($value)
    {
        if(!is_null($value)) return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    /**
     *  Mutator para salvar o objeto Carbon válido
     *  no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function setLastUpdateAttribute($value)
    {
        if(!is_null($value)) $this->attributes['last_update'] = $this->valueToCarbonObject($value);
    }

    public function sistemaCentro()
    {
        return $this->belongsToMany(SistemasCentros::class, 'sistema_id');
    }

}
