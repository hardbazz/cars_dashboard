<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = [
        'brand',
        'model',
        'bodytype',
        'fuel',
        'weight',
        'acceleration',
        'top_speed',
        'mileage',
        'color',
        'doors',
        'gears',
        'transmission',
        'year_build',
        'license_plate',
        'horsepower',
        'carname'
    ];

    public function brands()
    {
        return $this->belongsTo('App\Car');
    }

    public function bodytypes()
    {
        return $this->belongsTo('App\Car');
    }

    public function fuels()
    {
        return $this->belongsTo('App\Car');
    }

    public function carDetails()
    {
        return $this->belongsTo('App\Car');
    }
}