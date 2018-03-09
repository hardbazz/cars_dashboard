<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    protected $fillable = [
    ];

    public function cars()
    {
        return $this->belongsTo('App\Car');
    }
}
