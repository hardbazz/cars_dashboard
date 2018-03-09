<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodytype extends Model
{
    protected $table = 'bodytypes';

    protected $fillable = [
    ];

    public function cars()
    {
        return $this->belongsTo('App\Car');
    }
}
