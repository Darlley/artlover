<?php

namespace App\Http\Controllers\Stripe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Cashier\Http\Controllers\WebhookController as StripeWebhookController;

class WebhookController extends StripeWebhookController
{
    public function handleChargeSucceeded($eventPayload)
    {
        Log::debug('stripe event', $eventPayload);
    }
}
