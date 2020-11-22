<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmartphoneImage extends Model
{
    protected $fillable = [

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
