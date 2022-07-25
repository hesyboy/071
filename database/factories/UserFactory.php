<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'code_melli' => $this->faker->numberBetween(1000000,9999999),
            'state_id' => $this->faker->numberBetween(0,5),
            'address' => $this->faker->address(),
            'email' => $this->faker->unique()->email(),
            'email_verified_at' => now(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'user_type' => $this->faker->numberBetween(0,5),
            'has_shop' => $this->faker->numberBetween(0,1),
            'is_admin' => $this->faker->numberBetween(0,1),
            'user_role' => $this->faker->numberBetween(0,1),
            'status' => $this->faker->numberBetween(0,1),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
