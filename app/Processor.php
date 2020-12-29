<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Processor
 *
 * @property int $id
 * @property string $title
 * @property int $core_amount
 * @property float $ghz
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Smartphone[] $smartphone
 * @property-read int|null $smartphone_count
 * @method static \Illuminate\Database\Eloquent\Builder|Processor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Processor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Processor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Processor whereCoreAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Processor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Processor whereGhz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Processor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Processor whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Processor whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Processor extends Model
{
    protected $fillable = [
        'title',
        'core_amount',
        'ghz'
    ];

    public function smartphone()
    {
        return $this->belongsToMany(Smartphone::class);
    }
}
