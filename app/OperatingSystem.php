<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperatingSystem extends Model
{
    protected $fillable = [
        'title'
    ];

    public function smartphone()
    {
        return $this->hasOne(Smartphone::class);
    }
}
