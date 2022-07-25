<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'seo_title' => $this->faker->title(),
            'seo_description' => $this->faker->paragraph(),
            'status' => $this->faker->numberBetween(0,1),
        ];
    }
}
