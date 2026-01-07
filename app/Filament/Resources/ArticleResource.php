<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use Filament\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns\Text;
use Filament\Resources\Tables\Columns\Boolean;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class ArticleResource extends Resource
{
    public static $model = \App\Models\Article::class;

    public static $navigationGroup = 'Crops';

    public static $navigationLabel = 'Articles';

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
                Components\TextInput::make('title')->required(),
                Components\TextInput::make('slug')->required()->unique('articles', 'slug'),
                Components\RichEditor::make('content')->nullable(),
                Components\Toggle::make('published')->default(false),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Text::make('title')->searchable()->sortable(),
                Boolean::make('published'),
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
            Pages\ListArticles::routeTo('/', 'index'),
            Pages\CreateArticle::routeTo('/create', 'create'),
            Pages\EditArticle::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
