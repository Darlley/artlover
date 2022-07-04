<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\WithPagination;

class ProductsList extends Component
{
    use WithPagination;

    public $search;
    public $filter;

    protected $queryString = [
        "search" => ["except" => ""],
        "filter" => ["except" => ""],
    ];

    public function getProductsProperty()
    {
        return Product::query()
            ->when($this->search, function (Builder $query) {
                $formattedNumber = is_numeric($this->search)
                    ? Str::of($this->search)->replace(',', '')->replace('.', '')
                    : $this->search;

                $query->where(
                    fn (Builder $product) => $product
                        ->where('name', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('price', 'LIKE', '%' . $formattedNumber . '%')
                        ->orWhere('description', 'LIKE', '%' . $this->search . '%')
                );
            })
            ->when($this->filter, function (Builder $query) {
                $this->filter === 'draft'
                    ? $query->whereNull('published_at')
                    : $query->whereNotNull('published_at');
            })
            ->orderBy('created_at','desc')
            ->paginate(9);
    }

    public function render()
    {
        return view('livewire.admin.products-list')->layout('layouts.admin');
    }
}
