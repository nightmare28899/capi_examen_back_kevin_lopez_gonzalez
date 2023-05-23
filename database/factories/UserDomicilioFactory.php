<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDomicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 100),
            'domicilio' => $this->faker->streetAddress(),
            'numero_exterior' => $this->faker->numberBetween(1, 1000),
            'colonia' => $this->faker->city(),
            'cp' => $this->faker->postcode(),
            'ciudad' => $this->faker->city(),
        ];
    }
}
