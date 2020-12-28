<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Smartphone
 *
 * @property int $id
 * @property string $model
 * @property string $description
 * @property string|null $title_schema
 * @property int $operating_system_id
 * @property int $display_id
 * @property int $front_camera_id
 * @property int $main_camera_id
 * @property int $processor_id
 * @property int $brand_id
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Brand $brand
 * @property-read \App\Country $country
 * @property-read \App\Display $display
 * @property-read \App\FrontCamera $frontCamera
 * @property-read \App\MainCamera $mainCamera
 * @property-read \App\OperatingSystem $operatingSystem
 * @property-read \App\Processor $processor
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SmartphoneVariant[] $smartphoneImage
 * @property-read int|null $smartphone_image_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SmartphoneVariant[] $smartphoneVariant
 * @property-read int|null $smartphone_variant_count
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereDisplayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereFrontCameraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereMainCameraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereOperatingSystemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereProcessorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereTitleSchema($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Smartphone whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Smartphone extends Model
{
    protected $fillable = [
        'model',
        'description',
        'operating_system_id',
        'display_id',
        'front_camera_id',
        'main_camera_id',
        'processor_id',
        'brand_id',
        'country_id'
    ];

    public function operatingSystem()
    {
        return $this->belongsTo(OperatingSystem::class);
    }

    public function display()
    {
        return $this->belongsTo(Display::class);
    }

    public function frontCamera()
    {
        return $this->belongsTo(FrontCamera::class);
    }

    public function mainCamera()
    {
        return $this->belongsTo(MainCamera::class);
    }

    public function processor()
    {
        return $this->belongsTo(Processor::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function smartphoneVariant()
    {
        return $this->hasMany(SmartphoneVariant::class);
    }

    public function smartphoneImage()
    {
        return $this->hasMany(SmartphoneVariant::class);
    }
}
