<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class VariantFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'color' => $this->faker->randomElement(['ブラック', 'ホワイト', 'ブルー', 'イエロー', 'レッド']),
            'size' => $this->faker->randomElement(['XS', 'S', 'M', 'L', 'XL']),
            'quantity' => $this->faker->randomNumber(2),
        ];
    }
}
