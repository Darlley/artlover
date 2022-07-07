<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price','quantity','position'
    ];

    public function Product(){
        return $this->bolongsTo(Product::class);
    }
}
