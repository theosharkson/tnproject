<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id',
        'process_status',
        'date',
        'location',
        'mayment_method',
        'updated_by',
        'active_status',
    ];

    public function packages(){
        return $this->hasMany('App\OrderPackage','order_id');
    }

    public function extras(){
        return $this->hasMany('App\OrderExtra','order_id');
    }

}
