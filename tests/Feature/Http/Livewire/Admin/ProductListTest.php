<?php

namespace Tests\Feature\Http\Livewire\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;

use function Pest\Livewire\livewire;

it('is allowed for admin only', function(){

    /** @var User $admin */
    $admin = User::factory()->create([
        'admin' => true
    ]);

    /** @var User $user */
    $user = User::factory()->create();

    /**@var TestCase $this */
    $this->get(route('admin.products'))
        ->assertRedirect(route('login'));

    $this->actingAs($user)
        ->get(route('admin.products'))
        ->assertNotFound();

    $this->actingAs($admin)
        ->get(route('admin.products'))
        ->assertStatus(500);

});

it('should list all products paginated per 9', function() {
    //
});
it('should search products by name');
it('should search products by price');
it('should search products by description');
it('can be filteres by draft');
it('can be filteres by published');
it('should paginate by url');
it('shound sync query string');