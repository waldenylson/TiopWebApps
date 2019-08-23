<?php namespace TIOp\Domains\StatusDACOMData;

use Illuminate\Database\Eloquent\Model;
use TIOp\Support\Carbon\Traits\Eloquent\HasDateFieldsTrait;

class StatusDACOMData extends Model
{
    use HasDateFieldsTrait;

    protected $table = 'status_copia_dacom';

    protected $guarded = ['_token'];


}
