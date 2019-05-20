<?php

namespace App;

use App\Feature;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tnid',
        'refrence_tnid',
        'firstname',
        'lastname',
        'email',
        'phonecode',
        'phone_number',
        'password',
        'coins',
        'address',
        'location',
        'user_type',
        'image',
        'dashboard_activated',
        'active_status',
        'updated_by',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $with = [
        'type'
    ];

    public function type()
    {
        return $this->belongsTo('App\UserType','user_type');
    }

    public function tempOrder(){
        return $this->hasOne('App\Order','user_id')->where('process_status',getTempId());
    }


    function hasPermission($permission, $feature)
    {   
        $feature_id = 0;
        $feature_details = Feature::where('slug',$feature)->first();
        if(!empty($feature_details)){
            $feature_id = $feature_details->id;
        }
        return $this->type->permissions->where($permission,1)
                                       ->where('feature_id' ,$feature_id)
                                       ->isNotEmpty();
    }
    
}
