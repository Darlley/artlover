<?php

namespace Tests\Feature\Http\Livewire\Admin;

use Tests\TestCase;
use App\Models\User;
use App\Models\Product;
use function Pest\Livewire\livewire;

use App\Http\Livewire\Admin\ProductsList;

it('is allowed for admin only', function(){
    /** @var User $admin */
    $admin = User::factory()->create([
        'admin' => true
    ]);
    /** @var User $user */
    $user = User::factory()->create();


    /**@var TestCase $this */
    $this->get(route('admin.products'))->assertRedirect(route('login'));
    $this->actingAs($user)->get(route('admin.products'))->assertNotFound();
    $this->actingAs($admin)->get(route('admin.products'))->assertStatus(200);
});

it('should list all products paginated per 9', function() {
    /** @var Product $lastProduct */
    $lastProduct = Product::factory(10)->create()->last();

    livewire(ProductsList::class)->assertDontSee($lastProduct->name);
});

it('should search products by name', function() { 
    /** @var Collection $productList */
    $productList = Product::factory(3)->create();
    /** @var Product $product */
    $product = Product::factory()->create();


    livewire(ProductList::class)
        ->set('search', $product->name)
        ->assertSee($product->name)
        ->assertDontSee($productList->random()->name);
});

it('should search products by price', function () {
    /** @var Collection $productList */
    $productList = Product::factory(3)->create();
    /** @var Product $product */
    $product = Product::factory()->create();

    $formattedPrice = number_format($product->price/100, 2);

    $component = livewire(ProductList::class)
        ->set('search', $product->price)
        ->assertSee($formattedPrice)
        ->set('search', $formattedPrice)
        ->assertSee($formattedPrice);
    $productList->each(fn ($product) => $component->assertDontSee($product->price));
});

it('should search products by description', function () {
    /** @var Collection $productList */
    $productList = Product::factory(3)->create();
    /** @var Product $product */
    $product = Product::factory()->create();


    $component = livewire(ProductList::class)
        ->set('search', $product->description)
        ->assertSee($product->description)
        ->assertDontSee($productList->random()->description);
    $productList->each(fn ($product) => $component->assertDontSee($product->description));
});

it('can be filteres by draft', function () {
    /** @var Collection $productList */
    $productList = Product::factory(3)->create(['published_at' => now()]);
    /** @var Collection $draftProduct */
    $draftProduct = Product::factory()->create(['published_at' => null]);

    $component = livewire(ProductList::class)
        ->set('filter','draft')
        ->assertSee($draftProduct->name)
        ->assertSee($productList->random()->name);

    $productList->each(fn ($product) => $component->assertDontSee($product->name));
});

it('can be filteres by published', function(){

    /** @var Collection $productList */
    $productList = Product::factory(3)->create(['published_at' => null]);
    /** @var Collection $draftProduct */
    $draftProduct = Product::factory()->create(['published_at' => now()]);

    $component = livewire(ProductList::class)
        ->set('filter','published')
        ->assertSee($draftProduct->name)
        ->assertSee($productList->random()->name);

    $productList->each(fn ($product) => $component->assertDontSee($product->name));
});

// pagination livewire
// it('should paginate by url');
// it('shound sync query string');