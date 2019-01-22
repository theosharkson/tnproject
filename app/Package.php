<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'price_d',
        'price_coin',
        'image',
        'type_id',
        'active_status',
    ];


    public function type(){
        return $this->belongsToMany('App\PackageType','type_id');
    }

    public function items(){
        return $this->hasMany('App\PackageItem','type_id');
    }


}
