<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SmartphoneImageMap
 *
 * @property-read \App\Image $image
 * @property-read \App\Smartphone $smartphone
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneImageMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneImageMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneImageMap query()
 * @mixin \Eloquent
 */
class SmartphoneImageMap extends Model
{
    protected $fillable = [
        'type',
        'image_id',
        'smartphone_id'
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function smartphone()
    {
        return $this->belongsTo(Smartphone::class);
    }
}
