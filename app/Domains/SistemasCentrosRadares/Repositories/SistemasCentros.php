<?php namespace TIOp\Domains\SistemasCentrosRadares;

use Illuminate\Database\Eloquent\Model;
use TIOp\Domains\Radars\Radar;
use TIOp\Domains\SistemasCentros\SistemasCentros;

class SistemasCentrosRadares extends Model
{
    protected $table = 'sistemas_centros_radares';

    protected $guarded = ['_token'];

    public function sistema()
    {
        return $this->hasOne(Radar::class, 'id');
    }

    public function SistemaCentro()
    {
        return $this->hasOne(SistemasCentros::class, 'id');
    }

}
