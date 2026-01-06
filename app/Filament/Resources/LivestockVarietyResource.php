<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LivestockVarietyResource\Pages;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns\Text;
use Filament\Resources\Tables\Columns\Boolean;
use Filament\Resources\Tables\Table;

class LivestockVarietyResource extends Resource
{
    public static $model = \App\Models\LivestockVariety::class;

    public static $navigationGroup = 'Livestock';

    public static $navigationLabel = 'Livestock Varieties';

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
                Components\Select::make('livestock_category_id')
                    ->options(\App\Models\LivestockCategory::orderBy('name')->pluck('name', 'id')->toArray())
                    ->required(),
                Components\TextInput::make('name')->required(),
                Components\TextInput::make('variety_slug')->required()->unique('livestock_varieties', 'slug'),
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
                Text::make('category.name')->label('Category')->sortable(),
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
            Pages\ListLivestockVarieties::routeTo('/', 'index'),
            Pages\CreateLivestockVariety::routeTo('/create', 'create'),
            Pages\EditLivestockVariety::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
