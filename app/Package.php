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
        'active_status',
    ];


    public function products(){
        return $this->belongsToMany('App\Product');
    }
}
