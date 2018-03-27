<?php namespace TIOp\Domains\Radars;

use Illuminate\Database\Eloquent\Model;

class Radar extends Model
{
    protected $table = 'radares';

    protected $guarded = ['_token'];

}
