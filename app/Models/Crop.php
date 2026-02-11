<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'image', 'meta', 'status',
    ];

    protected $casts = [
        'meta' => 'array',
        'status' => 'boolean',
    ];
}
