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
}
