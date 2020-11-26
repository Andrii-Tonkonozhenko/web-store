<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
