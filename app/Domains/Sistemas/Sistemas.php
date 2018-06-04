<?php namespace TIOp\Domains\Sistemas;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use TIOp\Support\Carbon\Traits\Eloquent\HasDateFieldsTrait;

class Sistemas extends Model
{
    use HasDateFieldsTrait;

    protected $table = 'sistemas';

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
}
