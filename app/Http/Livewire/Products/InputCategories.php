<?php

namespace App\Http\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class InputCategories extends Component
{
    public $isOpen;
    public Product $product;
    public $selectedCategoriesId = [];
    
    protected $rules = [];

    public function mount($product){
        $this->product = $product;
        // $this->product = $product;
        $this->isOpen = false;
        // $this->categories = Category::all();

        $this->selectedCategoriesId = $this->product->categories->map->id->toArray();
    }

    public function addCategory(){
        Category::create([
            'name' => 'New Category'
        ]);

        // $this->categories = Category::all();
    }

    public function removeCategory(Category $category){
        $category->delete();
    }

    public function getCategoriesProperty(){
        return Category::all();
    }

    public function isSelectd(Category $category){
        return Collect($this->selectedCategoriesId)->contains($category->id);
    }

    public function emitSelectedIds()
    {
        $ids = Category::find($this->selectedCategoriesId)->map->id->toArray();
        $this->product->categories()->sync($ids);
        $this->product->refresh()->with('categories');
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.products.input-categories');
    }
}
