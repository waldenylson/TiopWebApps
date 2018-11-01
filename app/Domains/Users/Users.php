<?php namespace TIOp\Domains\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['_token'];

    protected $table = 'users';

    public function efetivoTiop()
    {
        return $this->hasOne(EfetivoTiop::class, 'id', 'efetivo_tiop_id');
    }
}
