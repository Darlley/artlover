<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductsList extends Component
{
    public function getProductsProperty()
    {
        return Product::paginate(9);
    }

    public function render()
    {
        return view('livewire.admin.products-list');
    }
}
