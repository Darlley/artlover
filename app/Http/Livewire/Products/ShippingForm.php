<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class ShippingForm extends Component
{

    public $shipping;
    
    public function render()
    {
        return view('livewire.products.shipping-form');
    }
}
