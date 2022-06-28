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
    public $shippings = [];
    
    protected $listeners = [
        'removeVariation','removeShipping'
    ];

    protected $messages = [
        'required' => "O campo :attribute é obrigatório ☝️"
    ];

    protected $rules = [
        'product.name' => 'required|max:255',
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
            'name' => 'Variation ' . $index,
            'price' => null ,
            'quantity' => null,
            'position' => $index - 1
        ])->toArray();

        $this->shippings = collect()->times(3)->map(fn ($index) => [
            'id' => Str::random(),
            'name' => 'Shipping ' . $index,
            'standalone_price' => 1000,
            'withothers_price' => 700,
            'price' => 1000,
            'others' => 500,
            'position' => $index - 1
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

    public function updateShippingPositions($shippingsOrder){

        $newShippings = [];
        foreach($shippingsOrder as $index => $id){
            $shipping = collect($this->shippings)->where('id',$id)->first();
            $shipping['position'] = $index;
            $newShippings[] = $shipping;
        }

        $this->shippings = $newShippings;
    }
    
    public function addVariation(){
        $this->variations[] = [
            'id' => Str::random(),
            'image' => null,
            'name' => 'Variation '. count($this->variations) + 1,
            'price' => null,
            'quantity' => null,
        ];
    }

    public function addShipping(){
        $this->shippings[] = [
            'id' => Str::random(),
            'name' => 'Shipping '. count($this->shippings) + 1,
            'standalone_price' => 1000,
            'withothers_price' => 700,
            'price' => null,
            'others' => null,
        ];
    }
    
    public function removeVariation($id){
        $this->variations = collect($this->variations)->filter(fn ($variation) => $variation['id'] !== $id)->toArray();
    }
    public function removeShipping($id){
        $this->shippings = collect($this->shippings)->filter(fn ($shipping) => $shipping['id'] !== $id)->toArray();
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
