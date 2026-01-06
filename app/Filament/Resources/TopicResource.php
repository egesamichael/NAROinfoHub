<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopicResource\Pages;
use App\Filament\Resources\TopicResource\RelationManagers;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class TopicResource extends Resource
{
    public static $model = \App\Models\Topic::class;

    public static $navigationGroup = 'Content';

    public static $navigationLabel = 'Topics';

    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('name')->required()->reactive(),
                Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
                Components\Textarea::make('description')->rows(4),
                Components\FileUpload::make('image')->image(),
                Components\KeyValue::make('meta')->nullable(),
                Components\TextInput::make('order')->numeric()->default(0),
                Components\Toggle::make('status')->default(true),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('order')->sortable(),
                BooleanColumn::make('status'),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                //
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
            Pages\ListTopics::routeTo('/', 'index'),
            Pages\CreateTopic::routeTo('/create', 'create'),
            Pages\EditTopic::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
