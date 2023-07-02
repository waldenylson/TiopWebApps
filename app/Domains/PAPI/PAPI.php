<?php namespace TIOp\Domains\PAPI;

use Illuminate\Database\Eloquent\Model;

class PAPI extends Model
{
    protected $table = 'papi_status';

    protected $guarded = ['_token'];

}
