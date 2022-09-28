<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;

class InputName extends Component
{
    public $category;

    protected $rules = [
        'category.name' => 'required|string|max:32'
    ];

    public function updated(){
        $this->validate();
        $this->category->save();
    }

    public function render()
    {
        return view('livewire.categories.input-name');
    }
}
