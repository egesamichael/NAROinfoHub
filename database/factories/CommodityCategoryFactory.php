<?php

namespace Database\Factories;

use App\Models\CommodityCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommodityCategoryFactory extends Factory
{
    protected $model = CommodityCategory::class;

    public function definition()
    {
        $name = $this->faker->unique()->word();
        return [
            'name' => ucfirst($name),
            'slug' => \Str::slug($name),
            'description' => $this->faker->sentence(),
            'status' => true,
        ];
    }
}
