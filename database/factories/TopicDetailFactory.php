<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TopicDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sub_topic_id' => null, // set in seeder
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->paragraphs(3, true),
            'attributes' => ['maturity' => $this->faker->numberBetween(90, 180)],
            'image' => null,
        ];
    }
}
