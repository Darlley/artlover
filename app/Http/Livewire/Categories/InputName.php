<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;

class InputName extends Component
{
    public $category;

    protected $rules = [
        'category.name' => 'required|string|max:32'
    ];
    
    public function render()
    {
        return view('livewire.categories.input-name');
    }
}
