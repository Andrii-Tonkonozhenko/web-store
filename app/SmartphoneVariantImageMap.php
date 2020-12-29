<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SmartphoneVariantImageMap
 *
 * @property-read \App\Image $image
 * @property-read \App\SmartphoneVariant $smartphoneVariant
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap query()
 * @mixin \Eloquent
 */
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
