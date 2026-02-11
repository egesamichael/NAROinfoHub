<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CropCategory extends Model
{
    protected $table = 'crop_categories';

    protected $fillable = [
        'crop_id', 'name', 'slug', 'description', 'meta', 'status', 'type',
    ];

    protected $casts = [
        'meta' => 'array',
        'status' => 'boolean',
    ];

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }
}
