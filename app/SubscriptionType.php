<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'active_status',
    ];
}
