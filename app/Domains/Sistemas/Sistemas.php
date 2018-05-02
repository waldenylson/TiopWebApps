<?php namespace TIOp\Domains\Sistemas;

use Illuminate\Database\Eloquent\Model;

class Sistemas extends Model
{
    protected $table = 'sistemas';

    protected $guarded = ['_token'];

}
