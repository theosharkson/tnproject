<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
    protected $fillable = [
        'user_id',
        'package_id',
        'subscription_date',
        'valid_status',
        'subscription_type',
        'active_status',
    ];
}
