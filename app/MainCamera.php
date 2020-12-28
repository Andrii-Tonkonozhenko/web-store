<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\MainCamera
 *
 * @property int $id
 * @property int $megapixels
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Smartphone[] $smartphone
 * @property-read int|null $smartphone_count
 * @method static \Illuminate\Database\Eloquent\Builder|MainCamera newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCamera newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCamera query()
 * @method static \Illuminate\Database\Eloquent\Builder|MainCamera whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCamera whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCamera whereMegapixels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainCamera whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MainCamera extends Model
{
    protected $fillable = [
        'megapixels'
    ];

    public function smartphone()
    {
        return $this->belongsToMany(Smartphone::class);
    }
}
