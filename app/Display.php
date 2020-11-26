<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    protected $fillable = [
        'material',
        'display_width',
        'display_height',
        'diagonal',
        'ghz',
    ];

    public function smartphone()
    {
        return $this->belongsToMany(Smartphone::class);
    }
}
