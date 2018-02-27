<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
	public $table = 'user';

	public $timestamps = false;

	protected $fillable = ['id','age','sex','email','like','fans','img','focus','user_id'];


	public function user_info()
	{
		return $this->hasOne('App\Http\Model\user_info','id','age','sex','email','like','fans','img','focus','user_id');
	}
}