<?php

use App\Facades\Stripe;
use App\Http\Livewire\CheckoutPage;
// use Mockery\Mock;

use function Pest\Laravel\mock;
use Laravel\Cashier\Checkout;

it('should create a cashier checkout', function(){
    $checkout = Mock(Checkout::class)
        ->shouldReceive('asStripeCheckoutSession')
        ->andReturn((object) ['id' => 'lorem ipsum'])
        // ->once()
        ->getMock();
    // Stripe::shouldReceive('createCheckoutSession')->once()->andReturn($checkout);

    Stripe::shouldReceive('createCheckoutSession')
    ->once()
    ->andReturn($checkout);
    // ->passthru();

    $this->livewire(CheckoutPage::class)->call('confirmPayment');
});