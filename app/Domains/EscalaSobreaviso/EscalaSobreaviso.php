<?php namespace TIOp\Domains\EscalaSobreaviso;

use Illuminate\Database\Eloquent\Model;
use TIOp\Domains\Users\EfetivoTiop;

class EscalaSobreaviso extends Model
{
    protected $table = 'escala_sobreaviso';

    protected $guarded = ['_token'];

    public function efetivoTiop()
    {
        return $this->belongsTo(EfetivoTiop::class, 'efetivo_id', 'id');
    }
}
