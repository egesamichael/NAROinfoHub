<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CropItemResource\Pages;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns\Text;
use Filament\Resources\Tables\Columns\Boolean;
use Filament\Resources\Tables\Table;

class CropItemResource extends Resource
{
    public static $model = \App\Models\CropItem::class;

    public static $navigationGroup = 'Crops';

    public static $navigationLabel = 'Items/Varieties';

    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form->schema([
            Components\Select::make('crop_category_id')->options(\App\Models\CropCategory::orderBy('name')->pluck('name','id')->toArray())->required(),
            Components\TextInput::make('title')->required(),
            Components\RichEditor::make('content')->nullable(),
            Components\TextInput::make('order')->type('number')->default(0),
        ]);
    }

    public static function table(Table $table)
    {
        return $table->columns([
            Text::make('cropCategory.name')->label('Category')->sortable(),
            Text::make('title')->searchable()->sortable(),
            Text::make('order'),
        ]);
    }

    public static function relations()
    {
        return [];
    }

    public static function routes()
    {
        return [
            Pages\ListItems::routeTo('/', 'index'),
            Pages\CreateItem::routeTo('/create', 'create'),
            Pages\EditItem::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
