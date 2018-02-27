<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
     
class user extends Model
{
   public $table = 'user';

   public $timestamps = false;

   protected $fillable = ['user_id','user_name','user_tel','user_password'];

   public function userinfo()
   {
   	return $this->hasOne('App\Http\Model\user','user_id');
   }

   public function contents()
   {
   	return $this->hasmany('App\Http\Model\contents','uid','id');
   }


}
