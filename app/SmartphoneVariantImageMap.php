<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmartphoneVariantImageMap extends Model
{
    protected $fillable = [
        'type',
        'image_id',
        'smartphone_variant_id'
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
