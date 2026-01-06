<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubTopicResource\Pages;
use App\Filament\Resources\SubTopicResource\RelationManagers;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class SubTopicResource extends Resource
{
    public static $model = \App\Models\SubTopic::class;

    public static $navigationGroup = 'Content';

    public static $navigationLabel = 'Sub Topics';

    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\Select::make('topic_id')->relationship('topic', 'name')->required(),
                Components\TextInput::make('name')->required(),
                Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
                Components\Textarea::make('description')->rows(3),
                Components\TextInput::make('order')->numeric()->default(0),
                Components\Toggle::make('status')->default(true),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('topic.name')->label('Topic')->sortable(),
                TextColumn::make('order')->sortable(),
                BooleanColumn::make('status'),
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
            Pages\ListSubTopics::routeTo('/', 'index'),
            Pages\CreateSubTopic::routeTo('/create', 'create'),
            Pages\EditSubTopic::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
