<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;

class VariationForm extends Component
{
    use WithFileUploads;

    public $variation;

    public function render()
    {
        return view('livewire.products.variation-form');
    }
}
