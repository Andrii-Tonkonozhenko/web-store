<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SmartphoneVariant
 *
 * @property int $id
 * @property int $smartphone_id
 * @property int $color_id
 * @property int $ram
 * @property float $price
 * @property int $hardware_memory
 * @property int $battery
 * @property string|null $title_schema
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Color $color
 * @property-read string $display
 * @property-read string $front_camera
 * @property-read string $main_camera
 * @property-read string $operating_system
 * @property-read string $processor
 * @property-read \App\Smartphone $smartphone
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SmartphoneVariantImageMap[] $smartphoneVariantImage
 * @property-read int|null $smartphone_variant_image_count
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant query()
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant whereBattery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant whereColorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant whereHardwareMemory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant whereRam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant whereSmartphoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant whereTitleSchema($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SmartphoneVariant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SmartphoneVariant extends Model
{
    protected $fillable = [
        'smartphone_id',
        'color_id',
        'ram',
        'price',
        'hardware_memory',
        'battery'
    ];

    public function smartphone()
    {
        return $this->belongsTo(Smartphone::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function smartphoneVariantImage()
    {
        return $this->hasMany(SmartphoneVariantImageMap::class);
    }

    public function getDisplayAttribute() : string
    {
        $diagonal = $this->smartphone->display->diagonal;
        $material  = $this->smartphone->display->material;
        $dispayHeight = $this->smartphone->display->display_height;
        $dispayWidth = $this->smartphone->display->display_width;

        return "{$diagonal}, {$material}, {$dispayHeight}x{$dispayWidth}";
    }

    public function getMainCameraAttribute() : string
    {
        return $this->smartphone->maincamera->megapixels;
    }

    public function getFrontCameraAttribute() : string
    {
        return $this->smartphone->frontcamera->megapixels;
    }

    public function getProcessorAttribute() : string
    {
        return "{$this->smartphone->processor->title} ({$this->smartphone->processor->ghz} Ghz)";
    }

    public function getOperatingSystemAttribute() : string
    {
        return $this->smartphone->operatingsystem->title;
    }

    public function getTitleAttribute() : string
    {
        $patterns = [
            "{brand}" => $this->smartphone->brand->title,
            "{ram}" => $this->ram,
            "{hardwareMemory}" => $this->hardware_memory,
            "{color}" => $this->color->title,
            "{diagonal}" => $this->smartphone->display->diagonal,
            "{material}" => $this->smartphone->display->material,
            "{displayHeight}" => $this->smartphone->display->display_height,
            "{displayWidth}" => $this->smartphone->display->display_width,
            "{mainCamera}" =>  $this->smartphone->maincamera->megapixels,
            "{frontCamera}" => $this->smartphone->frontcamera->megapixels,
            "{processor}" => $this->smartphone->processor->title,
            "{processorGhz}" => $this->smartphone->processor->ghz,
            "{operatingSystem}" => $this->smartphone->operatingsystem->title,
            "{price}" => $this->price
        ];

        if ($this->title_schema != null) {
            $text = $this->title_schema;
        } elseif ($this->smartphone->title_schema != null) {
            $text = $this->smartphone->title_schema;
        } else {
            $text = config('settings.global_smartphone_title_schema');
        }

        return strtr($text , $patterns);
    }
}
