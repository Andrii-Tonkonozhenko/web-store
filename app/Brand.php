<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'title',
    ];

    public function smartphone()
    {
        return $this->belongsToMany(Smartphone::class);
    }
}
