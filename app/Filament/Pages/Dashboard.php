<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Commodity;
use App\Models\CommodityCategory;
use App\Models\CommodityVariety;
use App\Models\Crop;
use App\Models\Topic;
use App\Models\User;

class Dashboard extends Page
{
    public static $view = 'filament.pages.dashboard';

    public static function getTitle(): string
    {
        return 'Admin Dashboard';
    }

    protected function viewData(): array
    {
        return [
            'counts' => [
                // Real data from DB
                'commodities' => Commodity::count(),

                // Hard-coded status cards (static for now)
                'livestock' => 0,
                'resources' => 0,

                // Additional counts (optional)
                'commodity_categories' => CommodityCategory::count(),
                'commodity_varieties' => CommodityVariety::count(),
                'crops' => method_exists(Crop::class, 'count') ? Crop::count() : 0,
                'topics' => Topic::count(),
                'users' => User::count(),
            ],
        ];
    }
}
