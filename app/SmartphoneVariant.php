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

}
