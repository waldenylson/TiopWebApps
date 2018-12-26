<?php namespace TIOp\Domains\MntProgramadas;

use Illuminate\Database\Eloquent\Model;
use TIOp\Domains\Radars\Radar;
use TIOp\Domains\Users\EfetivoTiop;

class MntProgramadas extends Model
{
    protected $table = 'mnt_programadas';

    protected $guarded = ['_token'];

    public function radar()
    {
        return $this->hasOne(Radar::class, 'id', 'radar_id');
    }

    public function efetivo()
    {
        return $this->hasOne(EfetivoTiop::class, 'id', 'efetivo_id');
    }

}
