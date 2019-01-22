<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'category',
        'active_status',
    ];
}
