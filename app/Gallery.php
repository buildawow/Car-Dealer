<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'car_id', 'image'
    ];


    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
