<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'title',
    ];

    public function smartphone()
    {
        return $this->hasMany(Smartphone::class);
    }
}
