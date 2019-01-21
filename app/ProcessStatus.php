<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessStatus extends Model
{
    protected $fillable = [
        'name',
        'description',
        'active_status',
    ];
}
