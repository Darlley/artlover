<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ProductForm extends Component
{
    public function render()
    {
        return view('livewire.admin.product-form')->layout('layouts.admin');
    }
}
