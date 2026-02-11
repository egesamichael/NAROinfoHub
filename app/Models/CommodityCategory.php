<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommodityCategory extends Model
{
    use HasFactory;

    protected $table = 'commodity_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
    ];

    public function varieties()
    {
        return $this->hasMany(CommodityVariety::class);
    }

    public function commodities()
    {
        return $this->hasMany(Commodity::class);
    }
}
