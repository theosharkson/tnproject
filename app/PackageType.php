<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'active_status',
    ];
}
