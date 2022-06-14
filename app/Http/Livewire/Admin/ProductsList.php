<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Contracts\Database\Eloquent\Builder;

class ProductsList extends Component
{
    public $search;

    public function getProductsProperty()
    {
        return Product::query()->when($this->search, function (Builder $query) {
            $formattedNumber = is_numeric($this->search)
                ? Str::of($this->search)->replace(',', '')->replace('.', '')
                : $this->search;

            $query->where(
                fn (Builder $product) => $product
                    ->where('name', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('price', 'LIKE', '%' . $formattedNumber . '%')
                    ->orWhere('description', 'LIKE', '%' . $this->search . '%')
            );
        })->paginate(9);
    }

    public function render()
    {
        return view('livewire.admin.products-list')->layout('layouts.admin');
    }
}
