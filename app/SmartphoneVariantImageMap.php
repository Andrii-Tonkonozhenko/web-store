<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SmartphoneVariantImageMap
 *
 * @property int $id
 * @property string $type
 * @property int $image_id
 * @property int $smartphone_variant_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Image $image
 * @property-read \App\SmartphoneVariant $smartphoneVariant
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap whereImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap whereSmartphoneVariantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariantImageMap whereUpdatedAt($value)
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
