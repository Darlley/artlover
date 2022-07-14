<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property-read string $name
 * @property-read int $santandalone_price
 * @property-read int $pack_price
 * @property-read int $position
 * @property-read int $product_id
 * @property-read Product $product
 * @property-read Carbon\Carbon $created_at
 * @property-read Carbon\Carbon $updated_at
 * @package App\Models
 */
class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'santandalone_price', 'pack_price', 'position'
    ];

    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
