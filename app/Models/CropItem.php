<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CropItem extends Model
{
    protected $table = 'crop_items';

    protected $fillable = [
        'crop_category_id', 'title', 'slug', 'content', 'order', 'meta', 'status',
    ];

    protected $casts = [
        'meta' => 'array',
        'status' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(CropCategory::class, 'crop_category_id');
    }

    // alias used by Filament resources / relations expecting `cropCategory`
    public function cropCategory()
    {
        return $this->category();
    }
}
