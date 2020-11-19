<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCamera extends Model
{
    protected $fillable = [
        'megapixels',
    ];

    public function smartphone()
    {
        return $this->hasMany(Smartphone::class);
    }
}
