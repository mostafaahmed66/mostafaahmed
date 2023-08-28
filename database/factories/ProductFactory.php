<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(1000, 10000),
            // 'category_id' => $this->faker->numberBetween(1, 10),
            'SOLD'=>$this->faker->numberBetween(1, 10),
            'User_id' => $this->faker->numberBetween(1, 10),
            // 'image' => $this->faker->imageUrl(640, 480, 'food'),
            //
        ];
    }
}
