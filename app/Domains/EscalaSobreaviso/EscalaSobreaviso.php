<?php namespace TIOp\Domains\EscalaSobraviso;

use Illuminate\Database\Eloquent\Model;
use TIOp\Domains\Users\EfetivoTiop;

class EscalaSobraviso extends Model
{
    protected $table = 'escala_sobreaviso';

    protected $guarded = ['_token'];

    public function efetivoTiop()
    {
        return $this->hasOne(EfetivoTiop::class, 'id', 'efetivo_id');
    }
}
