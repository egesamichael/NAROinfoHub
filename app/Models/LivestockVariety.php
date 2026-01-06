<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivestockVariety extends Model
{
    use HasFactory;

    protected $fillable = [
        'livestock_category_id',
        'name',
        'slug',
        'description',
        'image',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(LivestockCategory::class, 'livestock_category_id');
    }

    public function details()
    {
        return $this->hasMany(LivestockDetail::class);
    }
}
