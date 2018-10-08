<?php namespace TIOp\Domains\RPL;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use TIOp\Domains\BDS\BDS;
use TIOp\Support\Carbon\Traits\Eloquent\HasDateFieldsTrait;

class RPL extends Model
{
    use HasDateFieldsTrait;

    protected $table = 'rpl';

    protected $guarded = ['_token'];

    /**
     *  Acessor para transformar a data em um um objeto Carbon válido
     *  para ser salvo no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function getDataCargaAttribute($value)
    {
        if(!is_null($value)) return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    public function getValidadeAttribute($value)
    {
        if(!is_null($value)) return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    /**
     *  Mutator para salvar o objeto Carbon válido
     *  no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function setDataCargaAttribute($value)
    {
        if(!is_null($value)) $this->attributes['data_carga'] = $this->valueToCarbonObject($value);
    }

    public function setValidadeAttribute($value)
    {
        if(!is_null($value)) $this->attributes['validade'] = $this->valueToCarbonObject($value);
    }

    public function bds()
    {
        return $this->hasOne(BDS::class, 'id', 'bds_id');
    }
}
