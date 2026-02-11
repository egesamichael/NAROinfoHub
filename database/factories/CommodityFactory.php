<?php

namespace Database\Factories;

use App\Models\Commodity;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommodityFactory extends Factory
{
    protected $model = Commodity::class;

    public function definition()
    {
        $name = $this->faker->unique()->word();
        return [
            'commodity_category_id' => null,
            'commodity_variety_id' => null,
            'name' => ucfirst($name),
            'slug' => \Str::slug($name),
            'description' => $this->faker->sentence(),
            'status' => true,
        ];
    }
}
