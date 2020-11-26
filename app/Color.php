<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'title',
    ];

    public function smartphoneVariant()
    {
        return $this->belongsToMany(SmartphoneVariant::class);
    }
}
