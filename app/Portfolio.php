<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'name',
        'image',
        'type',
        'description',
        'active_status',
    ];

    public function items(){
        return $this->hasMany('App\PortfolioItem','protfolio_id');
    }
}
