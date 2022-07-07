<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Variation>
 */
class VariationFactory extends Factory
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
            'price' => $this->faker->randomNumber(4,true),
            'quantity' => $this->faker->numberBetween(0, 100),
            'position' => null,
        ];
    }
}
