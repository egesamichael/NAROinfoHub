<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FarmerAdoption;

class FarmerAdoptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adoptions = [
            [
                'adoption_date' => '2024-11-01',
                'farmer_name' => 'Joseph Mugisha',
                'district' => 'Kampala',
                'herd_size' => 50,
                'vaccinated' => 45,
                'cost' => 450000,
                'tick_reduction' => 85,
                'productivity_increase' => 12,
                'satisfaction' => 'Excellent',
            ],
            [
                'adoption_date' => '2024-11-02',
                'farmer_name' => 'Grace Nakimuli',
                'district' => 'Wakiso',
                'herd_size' => 80,
                'vaccinated' => 75,
                'cost' => 750000,
                'tick_reduction' => 90,
                'productivity_increase' => 15,
                'satisfaction' => 'Excellent',
            ],
            [
                'adoption_date' => '2024-11-03',
                'farmer_name' => 'Paul Ssemakula',
                'district' => 'Mukono',
                'herd_size' => 35,
                'vaccinated' => 35,
                'cost' => 350000,
                'tick_reduction' => 78,
                'productivity_increase' => 10,
                'satisfaction' => 'Good',
            ],
            [
                'adoption_date' => '2024-11-04',
                'farmer_name' => 'Betty Namukasa',
                'district' => 'Jinja',
                'herd_size' => 60,
                'vaccinated' => 58,
                'cost' => 580000,
                'tick_reduction' => 88,
                'productivity_increase' => 14,
                'satisfaction' => 'Excellent',
            ],
            [
                'adoption_date' => '2024-11-05',
                'farmer_name' => 'David Okwir',
                'district' => 'Mbale',
                'herd_size' => 45,
                'vaccinated' => 40,
                'cost' => 400000,
                'tick_reduction' => 82,
                'productivity_increase' => 11,
                'satisfaction' => 'Good',
            ],
            [
                'adoption_date' => '2024-11-06',
                'farmer_name' => 'Sarah Ainomugisha',
                'district' => 'Mbarara',
                'herd_size' => 100,
                'vaccinated' => 95,
                'cost' => 950000,
                'tick_reduction' => 92,
                'productivity_increase' => 18,
                'satisfaction' => 'Excellent',
            ],
            [
                'adoption_date' => '2024-11-07',
                'farmer_name' => 'Robert Oloya',
                'district' => 'Gulu',
                'herd_size' => 55,
                'vaccinated' => 50,
                'cost' => 500000,
                'tick_reduction' => 80,
                'productivity_increase' => 13,
                'satisfaction' => 'Good',
            ],
        ];

        foreach ($adoptions as $adoption) {
            FarmerAdoption::create($adoption);
        }
    }
}
