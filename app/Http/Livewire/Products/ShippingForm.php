<?php

namespace App\Http\Livewire\Products;

use App\Models\Shipping;
use Livewire\Component;

class ShippingForm extends Component
{

    public Shipping $shipping;
    
    protected $rules = [
        'shipping.id' => 'required|integer',
        'shipping.name' => 'required|string|max:255',
        'shipping.santandalone_price' => 'required|number|min:0',
        'shipping.pack_price' => 'required|number|min:0',
        'shipping.position' => 'required|number|min:0'
    ];

    public function updated() {
        $this->shipping->save();
    }

    public function emitSelectedIds()
    {
        $this->emit("onSelectdCategoryIds", $this->selectedCategoriesId);
    }

    public function render()
    {
        return view('livewire.products.shipping-form');
    }
}
