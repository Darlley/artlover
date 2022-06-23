<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class VariationForm extends Component
{
    public $variation;
    
    public function render()
    {
        return view('livewire.products.variation-form');
    }
}
