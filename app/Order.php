<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id',
        'process_status',
        'payment_status',
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

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function status(){
        return $this->belongsTo('App\ProcessStatus','process_status');
    }

    public function paymentstatus(){
        return $this->belongsTo('App\PaymentStatus','payment_status');
    }

    

    

}
