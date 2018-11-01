<?php namespace TIOp\Domains\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use TIOp\Support\Carbon\Traits\Eloquent\HasDateFieldsTrait;

class EfetivoTiop extends Authenticatable
{
    use Notifiable, HasDateFieldsTrait;

    protected $guarded = ['_token'];

    protected $table = 'efetivo_tiop';

    /**
     *  Acessor para transformar a data em um um objeto Carbon válido
     *  para ser salvo no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function getDataNascimentoAttribute($value)
    {
        if(!is_null($value)) return Carbon::parse($this->valueToCarbonObject($value))->format('d/m/Y');
    }

    /**
     *  Mutator para salvar o objeto Carbon válido
     *  no banco de dados com o formato correto
     *  @param $value
     *  @return Carbon object
     */
    public function setDataNascimentoAttribute($value)
    {
        if(!is_null($value)) $this->attributes['data_nascimento'] = $this->valueToCarbonObject($value);
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'efetivo_tiop_id', 'id');
    }
}
