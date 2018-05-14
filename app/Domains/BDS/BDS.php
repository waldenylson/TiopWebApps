<?php namespace TIOp\Domains\BDS;

use Illuminate\Database\Eloquent\Model;

class BDS extends Model
{
    protected $table = 'bds';

    protected $guarded = ['_token'];

}
