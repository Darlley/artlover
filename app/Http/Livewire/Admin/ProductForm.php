<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Illuminate\support\Str;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class ProductForm extends Component
{
    use WithFileUploads;

    public ?Product $product;

    /** 
    * @var TemporaryUploadedFile[] 
    */
    public $temporaryImages = [];

    /** 
    * @var TemporaryUploadedFile[] 
    */
    public $previusImages = [];

    public $variations = [];
    
    protected $listeners = [
        'removeVariation'
    ];

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
        $this->product = new Product([
            'price' => 1000
        ]);

        $this->variations = collect()->times(3)->map(fn ($index) => [
            'id' => Str::random(),
            'image' => null,
            'name' => 'Lorem Ipsum ' . $index,
            'price' => null ,
            'quantity' => null,
            'position' => 0
        ])->toArray();
    }

    public function updateVariationsPositions($variationsOrder){

        $newVariations = [];
        foreach($variationsOrder as $index => $id){
            $variation = collect($this->variations)->where('id',$id)->first();
            $variation['position'] = $index;
            $newVariations[] = $variation;
        }

        $this->variations = $newVariations;
    }
    
    public function addVariation(){
        $this->variations[] = [
            'id' => Str::random(),
            'image' => null,
            'name' => null,
            'price' => null,
            'quantity' => null,
        ];
    }
    
    public function removeVariation($id){
        $this->variations = collect($this->variations)->filter(fn ($variation) => $variation['id'] !== $id)->toArray();
    }

    public function removeTemporaryImage($image){
        array_splice($this->temporaryImages, $image,1);
    }

    public function updatingTemporaryImages(){
        $this->previusImages = $this->temporaryImages;
    }

    public function updatedTemporaryImages(){
        $this->temporaryImages = collect([
            ...$this->previusImages,
            ...$this->temporaryImages
        ])->unique(fn (TemporaryUploadedFile $file) => $file->getClientOriginalName())->toArray();
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
