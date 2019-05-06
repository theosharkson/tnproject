<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPackage extends Model
{
    protected $fillable = [
        'order_id',
        'package_id',
    ];

    public function package(){
        return $this->belongsTo('App\Package','package_id');
    }

    public function orderPackageExtras(){
        return $this->hasMany('App\OrderPackageExtra','order_package_id');
    }

}
