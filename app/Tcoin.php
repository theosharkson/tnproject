<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tcoin extends Model
{
    protected $fillable = [
        'coins_value',
        'currency_value',
        'country',
        'currency',
        'description',
    ];
}
