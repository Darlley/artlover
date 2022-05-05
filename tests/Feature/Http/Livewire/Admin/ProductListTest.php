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

    /**@var TestCase $this */
    $this->get(route('admin.producs'))->assertNotFound();
    $this->actingAs($admin)
        ->get(route('admin.products'))
        ->assertOk();

    // Quando alguem sem acesso tenta ir nesta rota o error é "não existe", 
    // isto é necessário para despistar hackers maliciosos 
});
it('should list all products paginated per 9');
it('should search products by name');
it('should search products by price');
it('should search products by description');
it('can be filteres by draft');
it('can be filteres by published');
it('should paginate by url');
it('shound sync query string');