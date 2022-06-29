<?php

use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Str;
use function Pest\Laravel\actingAs;
use function Pest\Livewire\livewire;

it('should be admin to save', function(){
    /** @var TestCase */
    $this->get(route('admin.products.create'))
        ->assertRedirect(route('login'));
    
    $user = User::factory()->create();
    actingAs($user)->get(route('admin.products.create'))
        ->assertNotFound();
});

it('required name field', function(){
    livewire(ProductForm::class)
        ->set('product.name', '')
        ->call('save')
        ->assertHasErrors('product.name')
        ->assertSee(trans('validation.required', ['attribute' => 'name']));
});

test('field name has max of 255', function(){
    livewire(ProductForm::class)
        ->set('product.name', Str::random(255))
        ->call('save')
        ->assertHasErrors('product.name')
        ->assertSee(trans('validation.max.string', ['attribute' => 'name', 'max' => 255]))
        ->set('product.name', Str::random('max', 255))
        ->call('save')
        ->assertDontSee(trans('validation.max.string', ['attribute' => 'name', 'max' => 255]));
});

it('required description field', function(){
    livewire(ProductForm::class)
        ->set('product.description', '')
        ->call('save')
        ->assertHasErrors('product.description')
        ->assertSee(trans('validation.required', ['attribute' => 'description']));
});

test('categories as optional');

it('price field has min of 1 dolar', function(){
    livewire(ProductForm::class)
        ->set('product.price', '99')
        ->call('save')
        ->assertHasErrors('product.price')
        ->assertSee(trans('validation.min.numeric', ['attribute' => 'price', 'min' => 100]))
        ->assertSee('The price must be at least $ 1.00');
});

it('required price field', function(){
    livewire(ProductForm::class)
        ->set('product.price', '')
        ->call('save')
        ->assertHasErrors('product.price')
        ->assertSee(trans('validation.required', ['attribute' => 'price']));
});

it('stores in database as draft');
it('keeps status if already published');

// it('should contain the name');
// it('should contain the description');
// it('if it has variation it must contain an image');
// it('if it has variation it must contain its name');
// it('if it has variation it must contain its price');
// it('if it has variation it must contain its quantity');
// it('if it has shipping it must contain its name');
// it('if it has shipping it must contain its standalone');
// it('if it has shipping it must contain its withothers');