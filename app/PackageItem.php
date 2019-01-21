<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackageItem extends Model
{
    protected $fillable = [
        'name',
        'image',
        'package_id',
        'active_status',
    ];

    public function package(){
        return $this->belongsToMany('App\Package','package_id');
    }
}
