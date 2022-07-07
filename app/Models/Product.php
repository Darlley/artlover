<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\{
    HasMedia,
    InteractsWithMedia
};

/**
 * @property-read int $id
 * @property-read string $name
 * @property-read string $description
 * @property-read int $price
 * @property-read string $status
 * @property-read Carbon\Carbon $published_at
 * @property-read Carbon\Carbon $created_at
 * @property-read Carbon\Carbon $updated_at
 * @package App\Models
 */
class Product extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable = [
        'name', 
        'description',
        'price',
        'published_at'
    ];

    public function Variations(){
        return $this->hasMany(Variation::class);
    }
}
