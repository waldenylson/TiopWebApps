<?php namespace TIOp\Domains\Centros;

use Illuminate\Database\Eloquent\Model;

class Centros extends Model
{
    protected $table = 'centros';

    protected $guarded = ['_token'];

    public function sistemaCentro()
    {
        return $this->belongsToMany(SistemasCentros::class, 'centro_id');
    }

}
