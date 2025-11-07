<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VetVaccination;

class VetVaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaccinations = [
            [
                'vaccination_date' => '2024-11-01',
                'vet_name' => 'Dr. John Okello',
                'district' => 'Kampala',
                'total_animals' => 150,
                'cattle' => 100,
                'goats' => 30,
                'sheep' => 20,
                'efficacy_rate' => 95.5,
                'adverse_reactions' => 2,
            ],
            [
                'vaccination_date' => '2024-11-02',
                'vet_name' => 'Dr. Sarah Nakato',
                'district' => 'Wakiso',
                'total_animals' => 200,
                'cattle' => 150,
                'goats' => 30,
                'sheep' => 20,
                'efficacy_rate' => 96.2,
                'adverse_reactions' => 1,
            ],
            [
                'vaccination_date' => '2024-11-03',
                'vet_name' => 'Dr. Peter Musoke',
                'district' => 'Mukono',
                'total_animals' => 180,
                'cattle' => 120,
                'goats' => 40,
                'sheep' => 20,
                'efficacy_rate' => 94.8,
                'adverse_reactions' => 3,
            ],
            [
                'vaccination_date' => '2024-11-04',
                'vet_name' => 'Dr. Mary Auma',
                'district' => 'Jinja',
                'total_animals' => 220,
                'cattle' => 170,
                'goats' => 30,
                'sheep' => 20,
                'efficacy_rate' => 97.1,
                'adverse_reactions' => 1,
            ],
            [
                'vaccination_date' => '2024-11-05',
                'vet_name' => 'Dr. James Opio',
                'district' => 'Mbale',
                'total_animals' => 165,
                'cattle' => 110,
                'goats' => 35,
                'sheep' => 20,
                'efficacy_rate' => 95.9,
                'adverse_reactions' => 2,
            ],
            [
                'vaccination_date' => '2024-11-06',
                'vet_name' => 'Dr. Jane Nalongo',
                'district' => 'Mbarara',
                'total_animals' => 190,
                'cattle' => 140,
                'goats' => 30,
                'sheep' => 20,
                'efficacy_rate' => 96.5,
                'adverse_reactions' => 1,
            ],
            [
                'vaccination_date' => '2024-11-07',
                'vet_name' => 'Dr. David Lubega',
                'district' => 'Gulu',
                'total_animals' => 175,
                'cattle' => 125,
                'goats' => 30,
                'sheep' => 20,
                'efficacy_rate' => 95.2,
                'adverse_reactions' => 2,
            ],
        ];

        foreach ($vaccinations as $vaccination) {
            VetVaccination::create($vaccination);
        }
    }
}
