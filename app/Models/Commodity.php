<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    use HasFactory;

    protected $table = 'commodities';

    protected $fillable = [
        'commodity_category_id',
        'commodity_variety_id',
        'name',
        'slug',
        'description',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(CommodityCategory::class, 'commodity_category_id');
    }

    public function variety()
    {
        return $this->belongsTo(CommodityVariety::class, 'commodity_variety_id');
    }
}
