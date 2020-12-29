<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\OperatingSystem
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Smartphone|null $smartphone
 * @method static \Illuminate\Database\Eloquent\Builder|OperatingSystem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OperatingSystem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OperatingSystem query()
 * @method static \Illuminate\Database\Eloquent\Builder|OperatingSystem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperatingSystem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperatingSystem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OperatingSystem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
