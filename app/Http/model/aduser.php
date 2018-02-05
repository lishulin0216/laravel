<?php

namespace App\http\model;

use Illuminate\Database\Eloquent\Model;

class aduser extends Model
{
    public $table = 'aduser';

    public $timestamps = false;

    protected $fillable = ['aduser_id','aduser_name','aduser_password'];
}
