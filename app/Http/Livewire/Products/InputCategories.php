<?php

namespace App\Http\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class InputCategories extends Component
{
    public $product;
    public $isOpen;
    // public $categories = [];
    public $selectedCategoriesId = [];
    
    protected $rules = [];

    public function mount($product){
        // $this->product = $product;
        $this->isOpen = false;
        // $this->categories = Category::all();
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

    public function render()
    {
        return view('livewire.products.input-categories');
    }
}
