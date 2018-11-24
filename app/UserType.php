<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'active_status',
    ];

    public function permissions(){
	    return $this->hasMany('App\Permission','user_type_id');
	}
}
