<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontCamera extends Model
{
    protected $fillable = [
        'megapixels'
    ];

    public function smartphone()
    {
        return $this->belongsToMany(Smartphone::class);
    }
}
