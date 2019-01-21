<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'active_status',
    ];
}
