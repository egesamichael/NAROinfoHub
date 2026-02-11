<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CropResource\Pages;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns\Text;
use Filament\Resources\Tables\Columns\Boolean;
use Filament\Resources\Tables\Table;

class CropResource extends Resource
{
    public static $model = \App\Models\Crop::class;

    public static $navigationGroup = 'Crops';

    public static $navigationLabel = 'Crops';

    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form->schema([
            Components\TextInput::make('name')->required(),
            Components\TextInput::make('slug')->label('Slug')->nullable(),
            Components\Textarea::make('description')->rows(4)->nullable(),
            Components\Toggle::make('status')->default(true),
        ]);
    }

    public static function table(Table $table)
    {
        return $table->columns([
            Text::make('name')->searchable()->sortable(),
            Boolean::make('status'),
            Text::make('created_at')->dateTime()->sortable(),
        ]);
    }

    public static function relations()
    {
        return [];
    }

    public static function routes()
    {
        return [
            Pages\ListCrops::routeTo('/', 'index'),
            Pages\CreateCrop::routeTo('/create', 'create'),
            Pages\EditCrop::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
