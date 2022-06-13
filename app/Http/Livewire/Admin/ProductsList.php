<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductsList extends Component
{
    public function getProductsProperty()
    {
        return Product::paginate();
    }

    public function render()
    {
        return view('livewire.admin.products-list')->layout('layouts.admin');
    }
}
