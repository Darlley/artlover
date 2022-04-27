<?php

namespace App\Facades;

use \App\Services\Stripe as ServicesStripe;
use Illuminate\Support\Facades\Facade;

class Stripe extends Facade
{
    protected static function getFacadeAccessor()
    {
        // return ServicesStripe::class;
        return '\App\Services\Stripe';
        // return App\Services\Stripe::class;
    }
}