<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class InputCategories extends Component
{
    public $product;
    public $isOpen;

    public function mount($product){
        // $this->product = $product;
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.products.input-categories');
    }
}
