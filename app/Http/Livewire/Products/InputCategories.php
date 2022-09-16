<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class InputCategories extends Component
{
    public $product;
    public $isOpen;
    public $categories = [];

    public function mount($product){
        // $this->product = $product;
        $this->isOpen = false;
    }

    public function addCategory(){
        $this->categories[] = [
            'id' => Str::random(),
            'name' => '',
        ];
    }

    public function render()
    {
        return view('livewire.products.input-categories');
    }
}
