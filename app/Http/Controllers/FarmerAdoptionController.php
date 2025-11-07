<?php

namespace App\Http\Controllers;

use App\Models\FarmerAdoption;
use Illuminate\Http\Request;

class FarmerAdoptionController extends Controller
{
    /**
     * Get all farmer adoption records
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $adoptions = FarmerAdoption::orderBy('adoption_date', 'desc')->get();
        
        // Format the data for frontend consumption
        $formattedData = $adoptions->map(function ($adoption) {
            return [
                'date' => $adoption->adoption_date->format('Y-m-d'),
                'farmer' => $adoption->farmer_name,
                'district' => $adoption->district,
                'herdSize' => $adoption->herd_size,
                'vaccinated' => $adoption->vaccinated,
                'cost' => (float) $adoption->cost,
                'tickReduction' => (float) $adoption->tick_reduction,
                'productivity' => (float) $adoption->productivity_increase,
                'satisfaction' => $adoption->satisfaction,
            ];
        });

        return response()->json($formattedData);
    }
}
