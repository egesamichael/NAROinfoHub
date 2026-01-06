<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class ArticleResource extends Resource
{
    public static $model = \App\Models\Article::class;
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('title')->required(),
                Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
                Components\RichEditor::make('content')->nullable(),
                Components\Toggle::make('published')->default(false),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                BooleanColumn::make('published'),
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
            Pages\ListArticles::routeTo('/', 'index'),
            Pages\CreateArticle::routeTo('/create', 'create'),
            Pages\EditArticle::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
