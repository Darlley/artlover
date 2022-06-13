<?php

use App\Http\Controllers\Stripe\WebhookController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    CheckoutPage
};
use App\Http\Livewire\Admin\ProductsList;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum','verified','admin'])->prefix('admin')->name('admin.')->group(function(){
    Route::get("/products", ProductsList::class)->name('products');
});

Route::get("/checkout", CheckoutPage::class)->name("checkout");
Route::post('/stripe/webhook', [WebhookController::class,'handleWebhook']);