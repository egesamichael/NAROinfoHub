<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LivestockDetailFactory extends Factory
{
    public function definition()
    {
        return [
            'livestock_variety_id' => null, // set in seeder
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->paragraphs(3, true),
            'attributes' => ['weight' => $this->faker->numberBetween(200, 1000)],
            'image' => null,
        ];
    }
}
