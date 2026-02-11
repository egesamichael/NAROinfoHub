<?php

namespace Database\Seeders;

use App\Models\Commodity;
use App\Models\CommodityCategory;
use App\Models\CommodityVariety;
use Illuminate\Database\Seeder;

class CommoditySeeder extends Seeder
{
    public function run()
    {
        // create a few categories and varieties and commodities
        $categories = CommodityCategory::factory()->count(3)->create();

        foreach ($categories as $category) {
            $varieties = CommodityVariety::factory()->count(2)->make()->each(function ($v) use ($category) {
                $v->commodity_category_id = $category->id;
                $v->save();
            });

            // create some commodities for each variety
            foreach ($category->varieties()->get() as $variety) {
                Commodity::factory()->count(4)->make()->each(function ($c) use ($category, $variety) {
                    $c->commodity_category_id = $category->id;
                    $c->commodity_variety_id = $variety->id;
                    $c->save();
                });
            }
        }
    }
}
