<?php

namespace App\http\model;

use Illuminate\Database\Eloquent\Model;

class list extends Model
{
    public $table = ;

    public $timestamps = false;

    protected $fillable = [];

    public function xxx()
    {
    	return $this -> hasOne('app\Http\model\e','','');
    }

    public funciton xxxx()
    {
		return $this -> hasMany('app\Http\model\e','','');	
    }
}
