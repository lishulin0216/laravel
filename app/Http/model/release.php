<?php

namespace App\Http\model;

use Illuminate\Database\Eloquent\Model;

class release extends Model
{
    public $table = 'release';

    public $timestamps = false;

    protected $fillable = ['release_id','release_content'];


    public function release()
    {
		return $this->hasOne('App\Http\Model\release','release_id');
    }
}