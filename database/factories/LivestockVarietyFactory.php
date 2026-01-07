<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LivestockVarietyFactory extends Factory
{
    public function definition()
    {
        return [
            'livestock_category_id' => null, // set in seeder
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->sentence(),
            'image' => null,
            'status' => true,
        ];
    }
}
