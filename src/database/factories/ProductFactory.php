<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'owner_id' => Owner::factory(),
            'name' => $this->faker->randomElement(['Tシャツ', 'シャツ', 'セーター', 'ジャケット', 'パンツ', 'スカート']),
            'amount' => $this->faker->randomNumber(5),
            'category_id' => Category::factory(),
            'description' => $this->faker->realTextBetween,
            'is_published' => $this->faker->boolean,
        ];
    }
}
