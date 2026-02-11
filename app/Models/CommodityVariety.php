<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommodityVariety extends Model
{
    use HasFactory;

    protected $table = 'commodity_varieties';

    protected $fillable = [
        'commodity_category_id',
        'name',
        'slug',
        'description',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(CommodityCategory::class, 'commodity_category_id');
    }

    public function commodities()
    {
        return $this->hasMany(Commodity::class, 'commodity_variety_id');
    }
}
