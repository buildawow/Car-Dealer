<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand', 'model', 'year', 'picture', 'price', 'availability'
    ];

    protected $casts = [
        'availability' => 'boolean'
    ];

    protected $dates = [
        'year'
    ];

    /**
     * Scope for brand
     * 
     * @return Builder
     */
    public function scopeBrand($query, $brand)
    {
        return $query->orwhere('brand', 'LIKE', "%{$brand}%");
    }

    /**
     * Scope for model
     * 
     * @return Builder
     */
    public function scopeCarModel($query, $model)
    {
        return $query->orwhere('brand', 'LIKE', "%{$model}%");
    }


}
