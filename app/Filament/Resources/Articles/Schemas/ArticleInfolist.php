<?php

namespace App\Filament\Resources\Articles\Schemas;

use App\Models\Article;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ArticleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        ImageEntry::make('thumbnail')
                            ->hiddenLabel()
                            ->columnSpanFull(),
                        TextEntry::make('title')
                            ->label(__('Title'))
                            ->columnSpanFull(),
                        TextEntry::make('slug')
                            ->label(__('Slug'))
                            ->badge()
                            ->columnSpanFull(),
                        TextEntry::make('content')
                            ->html()
                            ->columnSpanFull(),
                        TextEntry::make('category')
                            ->label(__('Category')),
                        TextEntry::make('author.name')
                            ->label(__('Author')),
                        TextEntry::make('published_at')
                            ->dateTime()
                            ->placeholder('-'),
                    ])->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
