<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;
	protected $primaryKey = "id";

	protected  $fillable = ['id','companyname','title','location','salary',];
}
