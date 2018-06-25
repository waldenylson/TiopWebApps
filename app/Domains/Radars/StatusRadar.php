<?php namespace TIOp\Domains\Radars;

use Illuminate\Database\Eloquent\Model;

class StatusRadar extends Model
{
    protected $table = 'status_radar';

    protected $guarded = ['_token'];

}
