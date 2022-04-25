<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Cashier\Billable;

class Customer extends Model
{
    use HasFactory;
    use Billable;
    use SoftDeletes;

    protected $fillable = ["name","email","stripe_id"];
}
