<?php


namespace App\http\model;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public $table = 'user';

    public $timestamps = false;

    protected $fillable = ['user_id','user_name','user_tel'];


    // public function permissions()
    // {
    // 	return $this->hasOne('App\Http\Model\permissions','user_id','permissions_id');
    // }

	public $table = 'user';

	public $timestamps = false;

	protected $fillable = ['id','uname','password','tel',];


	public function user_info()
	{
		return $this->hasOne('App\Http\Model\user_info','id','age','sex','email','like','fans','img','focus','user_id');
	}
}
