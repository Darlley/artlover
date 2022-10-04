<?php

use Database\Factories\ProductFactory;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\call;
use function Pest\Livewire\livewire;

it('adds an empty variation in database', function () {
    /** @var Product $product */
    $product = ProductFactory::factory()->new()->create();
    $product = livewire(ProductForm::class, compact('product'))
        ->call('addVariation')
        ->get('product');

    assertDatabaseCount('variations',1);
    // $product->refresh();
    expect($product->variations)->toHaveCount(1);
});
