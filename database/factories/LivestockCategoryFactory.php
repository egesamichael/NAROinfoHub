<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LivestockCategoryFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->sentence(),
            'image' => null,
            'status' => true,
        ];
    }
}
