<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LivestockCategory;
use App\Models\LivestockVariety;
use App\Models\LivestockDetail;

class LivestockSeeder extends Seeder
{
    public function run()
    {
        LivestockCategory::factory()->count(3)->create()->each(function ($category) {
            $varieties = LivestockVariety::factory()->count(3)->make();
            $varieties->each(function ($v) use ($category) {
                $v->livestock_category_id = $category->id;
                $v->save();

                $details = LivestockDetail::factory()->count(2)->make();
                $details->each(function ($d) use ($v) {
                    $d->livestock_variety_id = $v->id;
                    $d->save();
                });
            });
        });
    }
}
