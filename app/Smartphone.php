<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'country_id',
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
}
