<?php

namespace App\Http\Livewire;

use App\Facades\Stripe;
use App\Models\Customer;
use Livewire\Component;

class CheckoutPage extends Component
{
    public function confirmPayment()
    {
        
        $checkout = Stripe::createCheckoutSession(new Customer());
        dd("confirm payment", $checkout->asStripeCheckoutSession());

        return [
            "id" => $checkout->asStripeCheckoutSession()->id,
            "url" => $checkout->asStripeCheckoutSession()->url,
        ];
    }

    public function render()
    {
        return view('livewire.checkout-page');
    }
}