<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand', 'model', 'year', 'picture', 'price', 'availability', 'mileage', 'plates'
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

    public function scopeBrandWithPictureNotNull($query, $brand)
    {
        return $query->orwhere('brand', 'LIKE', "%{$brand}%")->whereNotNull('picture');
    }

    /**
     * Scope for model
     * 
     * @return Builder
     */
    public function scopeCarModel($query, $model)
    {
        return $query->orwhere('model', 'LIKE', "%{$model}%");
    }

    public function scopeCarModelWithPictureNotNull($query, $model)
    {
        return $query->orwhere('model', 'LIKE', "%{$model}%")->whereNotNull('picture');
    }

    /**
     * Scope for plates
     * 
     * @return Builder
     */
    public function scopePlates($query, $plates)
    {
        return $query->orwhere('plates', 'LIKE', "%{$plates}%");
    }


    /**
     * It returns a message of availability
     * 
     * @return string
     */
    public function detail()
    {
        return $this->availability == 1 ? 'Disponible' : 'No Disponible';
    }

    public function galleryImages()
    {
        return $this->hasMany(Gallery::class);
    }

}
