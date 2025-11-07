<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmerAdoption extends Model
{
    use HasFactory;

    protected $fillable = [
        'adoption_date',
        'farmer_name',
        'district',
        'herd_size',
        'vaccinated',
        'cost',
        'tick_reduction',
        'productivity_increase',
        'satisfaction',
    ];

    protected $casts = [
        'adoption_date' => 'date',
        'cost' => 'decimal:2',
        'tick_reduction' => 'decimal:2',
        'productivity_increase' => 'decimal:2',
    ];
}
