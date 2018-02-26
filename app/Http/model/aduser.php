<?php

namespace App\http\Model;

use Illuminate\Database\Eloquent\Model;

class aduser extends Model
{
    public $table = 'aduser';

    public $timestamps = false;

    protected $fillable = ['aduser_id','aduser_name','aduser_password','aduser_age','aduser_sex','aduser_tel'];


    public function aduser()
    {
		return $this->hasOne('App\Http\Model\aduser','aduser_id');
    }
}
