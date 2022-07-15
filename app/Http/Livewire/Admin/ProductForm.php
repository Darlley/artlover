<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\Shipping;
use App\Models\Variation;
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
        'required' => "O campo :attribute é obrigatório ☝️",
        'product.price.min' => "The price must be at least $ 1.00",
        'product.price.max' => "The price must be at most $ 1,000.000.00",
    ];

    protected $rules = [
        'product.name' => 'required|max:255',
        'product.description' => 'required',
        'product.price' => 'required|max:100000000'
    ];
    
    public function mount()
    {
        $this->product ??= new Product([
            'price' => null
        ]);
    }

    public function updateVariationsPositions($variationsOrder)
    {
        foreach($this->product->variations as $variation){
            $position = array_search($variation->id, $variationsOrder);
            $variation->fill(compact('position'))->save();
        }
        $this->product->refresh();

    }

    public function updateShippingPositions($shippingsOrder){
        foreach($this->product->shippings as $shipping){
            $position = array_search($shipping->id, $shippingsOrder);
            $shipping->fill(compact('position'))->save();
        }
        $this->product->refresh();
    }
    
    public function addVariation(){
        $this->product->variations()->save(new Variation([
            'position' => $this->product->variations()->count()
        ]));
        $this->product->refresh();
    }

    public function addShipping(){
        $this->product->shippings()->save(new Shipping([
            'position' => $this->product->shippings()->count()
        ]));
        $this->product->refresh();
    }

    public function removeVariation($id){
        // $this->variations = collect($this->variations)->filter(fn ($variation) => $variation['id'] !== $id)->toArray();
        $this->product->variations()->find($id)->delete();
        $this->product->refresh();
        return back();
    }

    public function removeShipping($id){
        // $this->shippings = collect($this->shippings)->filter(fn ($shipping) => $shipping['id'] !== $id)->toArray();
        $this->product->shippings()->find($id)->delete();
        $this->product->refresh();
        return back();
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
        $this->product->save();

        if($this->product->wasRecentlyCreated){
            return redirect(route('admin.products.edit', $this->product));
        }

        return redirect(route('admin.products'));
    }
    
    public function render()
    {
        return view('livewire.admin.product-form')->layout('layouts.admin');
    }

    public function addImages(){
        collect($this->temporaryImages)->each(function (TemporaryUploadedFile $image){
            $this->product->addMedia($image->getRealPath())->toMediaCollection();
        });
    }
}
