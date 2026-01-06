<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivestockDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'livestock_variety_id',
        'title',
        'content',
        'attributes',
        'image',
    ];

    protected $casts = [
        'attributes' => 'array',
    ];

    public function variety()
    {
        return $this->belongsTo(LivestockVariety::class, 'livestock_variety_id');
    }
}
