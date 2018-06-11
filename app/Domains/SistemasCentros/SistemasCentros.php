<?php namespace TIOp\Domains\SistemasCentros;

use Illuminate\Database\Eloquent\Model;
use TIOp\Domains\Centros\Centros;
use TIOp\Domains\Sistemas\Sistemas;

class SistemasCentros extends Model
{
    protected $table = 'sistemas_centros';

    protected $guarded = ['_token'];

    public function sistema()
    {
        return $this->hasOne(Sistemas::class, 'id');
    }

    public function centro()
    {
        return $this->hasOne(Centros::class, 'id');
    }

}
