<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    protected $fillable = [
      'title',
      'core_amount',
      'ghz',
    ];

    public function smartphone()
    {
        return $this->hasMany(Smartphone::class);
    }
}
