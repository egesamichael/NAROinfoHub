<?php

namespace Database\Factories;

use App\Models\CommodityVariety;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommodityVarietyFactory extends Factory
{
    protected $model = CommodityVariety::class;

    public function definition()
    {
        $name = $this->faker->unique()->word();
        return [
            'commodity_category_id' => null,
            'name' => ucfirst($name),
            'slug' => \Str::slug($name),
            'description' => $this->faker->sentence(),
            'status' => true,
        ];
    }
}
