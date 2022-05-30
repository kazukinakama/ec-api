<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'zipcode' => $this->faker->postcode,
            'prefecture' => $this->faker->prefecture,
            'city' => $this->faker->city,
            'street_address' => $this->faker->streetAddress,
            'tel' => $this->faker->numerify('080########'),
            'email_verified_at' => now(),
        ];
    }

    public function unverified(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
