<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LivestockCategoryResource\Pages;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns\Text;
use Filament\Resources\Tables\Columns\Boolean;
use Filament\Resources\Tables\Table;

class LivestockCategoryResource extends Resource
{
    public static $model = \App\Models\LivestockCategory::class;

    public static $navigationGroup = 'Livestock';

    public static $navigationLabel = 'Livestock Categories';

    public static $icon = 'heroicon-o-collection';

    public static function getNavigationGroup(): ?string
    {
        return 'Livestock';
    }

    public static function getNavigationBadge(): ?string
    {
        $count = static::$model::count();

        return $count > 0 ? (string) $count : null;
    }

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('name')->required(),
                Components\TextInput::make('category_slug')->required()->unique('livestock_categories', 'slug'),
                Components\Textarea::make('description')->rows(3),
                Components\FileUpload::make('image')->image(),
                Components\Toggle::make('status')->default(true),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Text::make('name')->searchable()->sortable(),
                Boolean::make('status'),
            ]);
    }

    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListLivestockCategories::routeTo('/', 'index'),
            Pages\CreateLivestockCategory::routeTo('/create', 'create'),
            Pages\EditLivestockCategory::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
