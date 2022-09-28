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
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $price
 * @property-read Collection|Variation[] $variations 
 * @property-read Collection|Shipping[] $shippings 
 * @property-read Collection|Category[] $categories
 * @property Carbon\Carbon $published_at
 * @property Carbon\Carbon $created_at
 * @property Carbon\Carbon $updated_at
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
        return $this->hasMany(Variation::class)->orderBy('position');
    }

    public function Shippings(){
        return $this->hasMany(Shipping::class)->orderBy('position');
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
