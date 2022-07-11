<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;

class VariationForm extends Component
{
    use WithFileUploads;

    public $variation;

    protected $rules = [
        'variation.name' => 'required', 
        'variation.price' => 'required|number|min:100',
        'variation.quantity' => 'required|number|min:1',
    ];

    protected $messages = [
        'variation.name' => 'O nome da variação é obrigatorio :(', 
        'variation.price' => 'O preço da variação é obrigatorio :(',
        'variation.quantity' => 'A quantidade da variação é obrigatoria :(',
    ];

    public function updated($name, $value) {
        $this->variation->save();
    }

    public function render()
    {
        return view('livewire.products.variation-form');
    }
}
