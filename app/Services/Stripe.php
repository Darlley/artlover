<?php

namespace App\Services;

use App\Models\Customer;
use Laravel\Cashier\Checkout;

class Stripe
{
    public function createCheckoutSession(Customer $customer): Checkout
    {

        return $customer->checkoutCharge(
            amount: 10000,
            name: 'Air Pod XPTO',
            sessionOptions: [
                'success_url' => "http://dev.test/checkout?checkout_id=xpto",
                'cancel_url' => "http://dev.test/checkout"
            ]
        );
    }
}