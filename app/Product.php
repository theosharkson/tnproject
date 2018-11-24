<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price_per_extra',
        'price_per_extra_d',
        'price_per_extra_coin',
        'image',
        'active_status',
    ];

    public function package(){
        return $this->belongsToMany('App\Package');
    }
}
