<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LivestockDetailResource\Pages;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns\Text;
use Filament\Resources\Tables\Columns\Boolean;
use Filament\Resources\Tables\Table;

class LivestockDetailResource extends Resource
{
    public static $model = \App\Models\LivestockDetail::class;

    public static $navigationGroup = 'Livestock';

    public static $navigationLabel = 'Livestock Details';

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
                Components\Select::make('livestock_variety_id')
                    ->options(\App\Models\LivestockVariety::orderBy('name')->pluck('name', 'id')->toArray())
                    ->required(),
                Components\TextInput::make('detail_title')->required(),
                Components\RichEditor::make('content')->nullable(),
                Components\KeyValue::make('attributes')->nullable(),
                Components\FileUpload::make('image')->image(),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Text::make('title')->searchable()->sortable(),
                Text::make('variety.name')->label('Variety')->sortable(),
                Text::make('created_at')->dateTime()->sortable(),
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
            Pages\ListLivestockDetails::routeTo('/', 'index'),
            Pages\CreateLivestockDetail::routeTo('/create', 'create'),
            Pages\EditLivestockDetail::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
