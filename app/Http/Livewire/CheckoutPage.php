<?php

namespace App\Http\Livewire;

use App\Models\Customer as ModelsCustomer;
use Livewire\Component;

class CheckoutPage extends Component
{
    public function confirmPayment()
    {
        $checkout = new ModelsCustomer();
        $checkout = $checkout->checkoutCharge(
            amount: 10000,
            name: 'Air Pod XPTO',
            sessionOptions: [
                'success_url' => "http://dev.test/checkout?checkout_id=xpto",
                'cancel_url' => "http://dev.test/checkout"
            ]
        );

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
