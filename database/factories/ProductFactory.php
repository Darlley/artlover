<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(rand(3,5), true),
            'description' => $this->faker->realText(),
            'price' => rand(1000, 100000),
            'status' => $this->faker->randomElement([null, Product::STATUS_DRAFT, Product::STATUS_PUBLISHED]),
            'published_at' => $this->faker->randomElement([null, $this->faker->dateTime]),
            
        ];
    }
}
