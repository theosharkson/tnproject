<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTcoinExpense extends Model
{
    protected $fillable = [
        'user_id',
        'coins',
        'date',
        'payment_method_id',
        'payment_status',
    ];
}
