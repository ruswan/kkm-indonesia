<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->label(__('Thumbnail'))
                            ->required()
                            ->image()
                            ->directory('articles/thumbnails/' . date('Y/m'))
                            ->visibility('public')
                            ->columnSpanFull(),
                        TextInput::make('title')
                            ->label(__('Title'))
                            ->required()
                            ->columnSpanFull()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        TextInput::make('slug')
                            ->label(__('Slug'))
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->columnSpanFull()
                            ->readOnly(),
                        RichEditor::make('content')
                            ->label(__('Content'))
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('category')
                            ->label(__('Category'))
                            ->default('Artikel')
                            ->hidden(),
                        DateTimePicker::make('published_at'),
                    ])->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
