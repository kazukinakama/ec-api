<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Variant;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cart_id' => Cart::factory(),
            'variant_id' => Variant::factory(),
            'quantity' => $this->faker->randomNumber(1),
        ];
    }
}
