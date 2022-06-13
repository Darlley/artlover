<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Component;
use Illuminate\Support\Str;

class ProductsList extends Component
{
    public $search;
    
    public function getProductsProperty()
    {
        return Product::query()
            ->when($this->search, function (Builder $product) {

                $formattedNumber = is_numeric($this->search)
                    ? Str::of($this->search)->replace(',','')->replace('.','') 
                    : $this->search;

                $product
                    ->where('name','LIKE','%'.$this->search.'%')
                    ->orWhere('price','LIKE','%'.$formattedNumber.'%');

            })->paginate(9);
    }

    public function render()
    {
        return view('livewire.admin.products-list')->layout('layouts.admin');
    }
}
