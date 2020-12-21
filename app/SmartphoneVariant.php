<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function getViewTitleAttribute() : string
    {
        return "Smartphone {$this->smartphone->brand->title} {$this->ram}/{$this->hardware_memory}Gb {$this->color->title}";
    }

    public function getDisplayAttribute() : string
    {
        return "{$this->smartphone->display->diagonal}, {$this->smartphone->display->material}, {$this->smartphone->display->display_height}x{$this->smartphone->display->display_width}";
    }

    public function getMainCameraAttribute() : string
    {
        return "{$this->smartphone->maincamera->megapixels}";
    }

    public function getFrontCameraAttribute() : string
    {
        return "{$this->smartphone->frontcamera->megapixels}";
    }
}
