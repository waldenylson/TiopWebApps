<?php namespace TIOp\Domains\EscalaSobreaviso;

use Illuminate\Database\Eloquent\Model;
use TIOp\Domains\Users\EfetivoTiop;

class EscalaSobreaviso extends Model
{
    protected $table = 'escala_sobreaviso';

    protected $guarded = ['_token'];

    public function setDiasAttribute($value)
    {
        $catchDias = [1,2,3,4,5,6,7,8,9];

        $baseArray = explode(',', $value);

        $correctArray = [];

        foreach ($baseArray as $value)
        {
            if(in_array($value, $catchDias))
            {
                $correctArray[] = '0'. (int)$value;
            }
            else
            {
                $correctArray[] = $value;
            }
        }

//        dd($correctArray);

        $this->attributes['dias'] = implode(',', $correctArray);
    }

    public function efetivoTiop()
    {
        return $this->belongsTo(EfetivoTiop::class, 'efetivo_id', 'id');
    }
}
