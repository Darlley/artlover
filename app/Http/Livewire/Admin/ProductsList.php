<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ProductsList extends Component
{
    public function render()
    {
        return view('livewire.admin.products-list')->layout('layouts.admin');
    }
}
