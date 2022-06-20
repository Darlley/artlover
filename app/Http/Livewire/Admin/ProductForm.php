<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{
    public ?Product $product;

    protected $messages = [
        'required' => "O campo :attribute é obrigatório ☝️"
    ];

    protected $rules = [
        'product.name' => 'required',
        'product.description' => 'required',
        'product.price' => 'required'
    ];
    
    public function mount()
    {
        $this->product = new Product(); 
    }

    public function save()
    {
        $this->validate();
    }
    
    public function render()
    {
        return view('livewire.admin.product-form')->layout('layouts.admin');
    }
}
