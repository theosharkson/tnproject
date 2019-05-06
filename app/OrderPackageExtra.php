<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPackageExtra extends Model
{
    protected $fillable = [
        'order_package_id',
        'extra_id',
        'quantity',
    ];

    public function extra(){
        return $this->belongsTo('App\Extra','extra_id');
    }

    public function orderpackage(){
        return $this->belongsTo('App\OrderPackage','order_package_id');
    }


}
