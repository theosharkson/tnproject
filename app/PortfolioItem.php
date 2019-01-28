<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $fillable = [
        'resource',
        'type',
        'protfolio_id',
    ];
}
