<?php

namespace Tests\Feature\Http\Livewire\Admin;

use App\Http\Livewire\Admin\ProductsList;
use Tests\TestCase;
use App\Models\User;
use App\Models\Product;

use function Pest\Livewire\livewire;

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
    $this->actingAs($admin)->get(route('admin.products'))->assertStatus(500);
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

it('should search products by description');
it('can be filteres by draft');
it('can be filteres by published');
it('should paginate by url');
it('shound sync query string');