<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Cashier\Billable;

/**
 * @properly-read int $id
 * @properly-read striing $nome
 * @properly-read striing $email
 * @properly-read striing $stripe_id
 * @properly-read Carbon\Carbon $created_at
 * @properly-read Carbon\Carbon $updated_at
 * @properly-read Carbon\Carbon $deleted_at
 * @package App\Models
 */

class Customer extends Model
{
    use HasFactory;
    use Billable;
    use SoftDeletes;

    protected $fillable = ["name","email","stripe_id"];
}
