<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'display_order' => $this->faker->numberBetween(1,3),
            'filename' => 'no-image.jpeg',
        ];
    }
}
