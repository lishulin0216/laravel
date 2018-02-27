<?php

<<<<<<< HEAD
namespace App\http\model;
=======
namespace App\Http\Model;
>>>>>>> c5163415ad4dfdf4e6eaa6651e204a1bad0f67a6

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
<<<<<<< HEAD
    public $table = 'user';

    public $timestamps = false;

    protected $fillable = ['user_id','user_name','user_tel'];


    // public function permissions()
    // {
    // 	return $this->hasOne('App\Http\Model\permissions','user_id','permissions_id');
    // }
}
=======
	public $table = 'user';

	public $timestamps = false;

	protected $fillable = ['id','uname','password','tel',];


	public function user_info()
	{
		return $this->hasOne('App\Http\Model\user_info','id','age','sex','email','like','fans','img','focus','user_id');
	}
}
>>>>>>> c5163415ad4dfdf4e6eaa6651e204a1bad0f67a6
