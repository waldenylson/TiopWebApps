<?php namespace TIOp\Domains\BDS;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use TIOp\Domains\SistemasCentros\SistemasCentros;
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
    public function getDataAtualizacaoAttribute($value)
    {
        if(!is_null($value)) return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    /**
     *  Mutator para salvar o objeto Carbon válido
     *  no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function setDataAtualizacaoAttribute($value)
    {
        if(!is_null($value)) $this->attributes['data_atualizacao'] = $this->valueToCarbonObject($value);
    }

    public function sistema_centro()
    {
        return $this->hasOne(SistemasCentros::class, 'id', 'sistema_centro_id');
    }
}
