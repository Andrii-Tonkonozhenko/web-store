<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'src',
        'alt'
    ];

    public function smartphoneImage()
    {
        return $this->hasMany(SmartphoneImageMap::class);
    }

    public function smartphoneVariantImage()
    {
        return $this->hasMany(SmartphoneVariantImageMap::class);
    }
}
