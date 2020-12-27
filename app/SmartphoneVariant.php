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

    public function getTitle() : string
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

        $text = '';

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
