<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmartphoneVariantImage extends Model
{
    protected $fillable = [

    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function smartphoneVariant()
    {
        return $this->belongsTo(SmartphoneVariant::class);
    }
}
