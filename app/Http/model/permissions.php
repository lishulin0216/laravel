<?php

namespace App\http\model;

use Illuminate\Database\Eloquent\Model;

class permissions extends Model
{
    public $table = 'permissions';

    public $timestamps = false;

    protected $fillable = ['permissions_id','permissions_type'];


    public function user()
    {
    	return $this->hasOne('App\Http\Model\user','user_id','permissions_id');
    }
}
   