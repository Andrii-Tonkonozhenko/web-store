<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Display
 *
 * @property int $id
 * @property string $material
 * @property int $display_width
 * @property int $display_height
 * @property float $diagonal
 * @property float $ghz
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Smartphone[] $smartphone
 * @property-read int|null $smartphone_count
 * @method static \Illuminate\Database\Eloquent\Builder|Display newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Display newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Display query()
 * @method static \Illuminate\Database\Eloquent\Builder|Display whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Display whereDiagonal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Display whereDisplayHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Display whereDisplayWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Display whereGhz($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Display whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Display whereMaterial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Display whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
