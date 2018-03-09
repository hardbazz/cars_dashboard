<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $table = 'fuels';

    protected $fillable = [
    ];

    public function cars()
    {
        return $this->belongsTo('App\Car');
    }
}
