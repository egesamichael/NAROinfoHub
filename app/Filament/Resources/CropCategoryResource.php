<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CropCategoryResource\Pages;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns\Text;
use Filament\Resources\Tables\Columns\Boolean;
use Filament\Resources\Tables\Table;

class CropCategoryResource extends Resource
{
    public static $model = \App\Models\CropCategory::class;

    public static $navigationGroup = 'Crops';

    public static $navigationLabel = 'Categories';

    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form->schema([
            Components\Select::make('crop_id')->options(\App\Models\Crop::orderBy('name')->pluck('name','id')->toArray())->required(),
            Components\TextInput::make('name')->required(),
            Components\TextInput::make('slug')->nullable(),
            Components\Textarea::make('description')->rows(4)->nullable(),
            Components\Select::make('type')->options(['detail'=>'detail','variety'=>'variety'])->default('detail'),
            Components\Toggle::make('status')->default(true),
        ]);
    }

    public static function table(Table $table)
    {
        return $table->columns([
            Text::make('crop.name')->label('Crop')->sortable(),
            Text::make('name')->searchable()->sortable(),
            Text::make('type'),
            Boolean::make('status'),
        ]);
    }

    public static function relations()
    {
        return [];
    }

    public static function routes()
    {
        return [
            Pages\ListCategories::routeTo('/', 'index'),
            Pages\CreateCategory::routeTo('/create', 'create'),
            Pages\EditCategory::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
