<?php

namespace App\Http\Controllers;

use App\Models\VetVaccination;
use Illuminate\Http\Request;

class VetVaccinationController extends Controller
{
    /**
     * Get all vet vaccination records
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $vaccinations = VetVaccination::orderBy('vaccination_date', 'desc')->get();
        
        // Format the data for frontend consumption
        $formattedData = $vaccinations->map(function ($vaccination) {
            return [
                'date' => $vaccination->vaccination_date->format('Y-m-d'),
                'vet' => $vaccination->vet_name,
                'district' => $vaccination->district,
                'total' => $vaccination->total_animals,
                'cattle' => $vaccination->cattle,
                'goats' => $vaccination->goats,
                'sheep' => $vaccination->sheep,
                'efficacy' => (float) $vaccination->efficacy_rate,
                'reactions' => $vaccination->adverse_reactions,
            ];
        });

        return response()->json($formattedData);
    }
}
