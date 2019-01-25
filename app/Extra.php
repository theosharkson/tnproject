<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $fillable = [
        'name',
        'image',
        'price',
        'price_d',
        'price_coin',
        'type',
        'description',
        'active_status',
    ];
}
