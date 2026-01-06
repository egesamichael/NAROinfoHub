<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TopicDetailResource\Pages;
use App\Filament\Resources\TopicDetailResource\RelationManagers;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns\Text;
use Filament\Resources\Tables\Columns\Boolean;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class TopicDetailResource extends Resource
{
    public static $model = \App\Models\TopicDetail::class;

    public static $navigationGroup = 'Content';

    public static $navigationLabel = 'Details';

    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\Select::make('sub_topic_id')->relationship('subTopic', 'name')->required(),
                Components\TextInput::make('title')->required(),
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
                Text::make('subTopic.name')->label('Sub-Topic')->sortable(),
                Text::make('created_at')->dateTime()->sortable(),
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
            Pages\ListTopicDetails::routeTo('/', 'index'),
            Pages\CreateTopicDetail::routeTo('/create', 'create'),
            Pages\EditTopicDetail::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
