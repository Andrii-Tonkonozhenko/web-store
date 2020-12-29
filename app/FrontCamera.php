<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\FrontCamera
 *
 * @property int $id
 * @property int $megapixels
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Smartphone[] $smartphone
 * @property-read int|null $smartphone_count
 * @method static \Illuminate\Database\Eloquent\Builder|FrontCamera newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontCamera newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontCamera query()
 * @method static \Illuminate\Database\Eloquent\Builder|FrontCamera whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontCamera whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontCamera whereMegapixels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FrontCamera whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
