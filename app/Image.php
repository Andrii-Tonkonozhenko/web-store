<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Image
 *
 * @property int $id
 * @property string $src
 * @property string $alt
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SmartphoneImageMap[] $smartphoneImage
 * @property-read int|null $smartphone_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SmartphoneVariantImageMap[] $smartphoneVariantImage
 * @property-read int|null $smartphone_variant_image_count
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
