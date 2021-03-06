<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPayment extends Model
{
    protected $fillable = [
        'transaction_code',
        'amount',
        'order_id',
        'payment_method_id',
        'payment_status',
        'remarks',
    ];
}
