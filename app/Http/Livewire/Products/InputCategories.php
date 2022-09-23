<?php

namespace App\Http\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class InputCategories extends Component
{
    public $product;
    public $isOpen;
    public $categories = [];
    
    protected $rules = [];

    public function mount($product){
        // $this->product = $product;
        $this->isOpen = false;
        $this->categories = Category::all();
    }

    public function addCategory(){
        // $this->categories[] = [
        //     'id' => Str::random(),
        //     'name' => '',
        // ];
    }

    public function render()
    {
        return view('livewire.products.input-categories');
    }
}
