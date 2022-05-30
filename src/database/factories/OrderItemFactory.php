<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Variant;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'variant_id' => Variant::factory(),
            'status' => $this->faker->randomNumber(1),
        ];
    }
}
