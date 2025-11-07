<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VetVaccination extends Model
{
    use HasFactory;

    protected $fillable = [
        'vaccination_date',
        'vet_name',
        'district',
        'total_animals',
        'cattle',
        'goats',
        'sheep',
        'efficacy_rate',
        'adverse_reactions',
    ];

    protected $casts = [
        'vaccination_date' => 'date',
        'efficacy_rate' => 'decimal:2',
    ];
}
