<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   
	public $timestamps = false;
	protected $primaryKey = "id";

	protected  $fillable = ['id','username','password','ename','cname','phone','type'];
}
