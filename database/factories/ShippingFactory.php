<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipping>
 */
class ShippingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company, 
            'santandalone_price' => rand(1000,10000), 
            'pack_price' =>rand(500,7500),
            'position' => null,
            'product_id' => ProductFactory::new()
        ];
    }
}
