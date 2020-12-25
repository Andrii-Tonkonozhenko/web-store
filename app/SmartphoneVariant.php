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
}
