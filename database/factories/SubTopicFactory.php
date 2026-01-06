<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubTopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'topic_id' => null, // set in seeder
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->sentence(),
            'order' => 0,
            'status' => true,
        ];
    }
}
