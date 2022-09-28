<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id;
 * @property string $name;
 * @property Collection|Product[] $products;
 * @property Carbon $created_at;
 * @property Carbon $updated_at;
 * @package App\Models;
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
