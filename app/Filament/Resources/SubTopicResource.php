<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubTopicResource\Pages;
use App\Filament\Resources\SubTopicResource\RelationManagers;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns\Text;
use Filament\Resources\Tables\Columns\Boolean;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class SubTopicResource extends Resource
{
    public static $model = \App\Models\SubTopic::class;

    public static $navigationGroup = 'Crops';

    public static $navigationLabel = 'Sub Topics';

    public static $icon = 'heroicon-o-collection';

    public static function getNavigationGroup(): ?string
    {
        return 'Crops';
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
                Components\Select::make('topic_id')
                    ->options(\App\Models\Topic::orderBy('name')->pluck('name', 'id')->toArray())
                    ->required(),
                Components\TextInput::make('name')->required(),
                Components\TextInput::make('subtopic_slug')->required()->unique('sub_topics', 'slug'),
                Components\Textarea::make('description')->rows(3),
                Components\Toggle::make('status')->default(true),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Text::make('name')->searchable()->sortable(),
                Text::make('topic.name')->label('Topic')->sortable(),
                Boolean::make('status'),
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
