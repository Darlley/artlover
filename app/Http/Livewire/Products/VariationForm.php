<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class VariationForm extends Component
{
    use WithFileUploads;

    public $variation;
    public $image;

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

    public function mount(){
        $this->image = $this->variation->getFirstMedia();
    }

    public function updated() {
        $this->variation->save();
        if($this->image instanceof TemporaryUploadedFile){
            $this->image = $this->variation->addMedia($this->image->getRealPath())->toMediaCollection(); 
        }
    }

    public function render()
    {
        return view('livewire.products.variation-form');
    }
}
