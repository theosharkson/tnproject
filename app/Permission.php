<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
    	'can_add',
    	'can_edit',
    	'can_delete',
    	'can_view_log',
    	'can_print',
    	'user_type_id',
    	'feature_id',
    	'description',
    ];

    public function user_type(){
        return $this->belongsTo('App\UserType','user_type_id');
    }

    public function feature(){
        return $this->belongsTo('App\Feature','feature_id');
    }


}
