<?php

namespace App\Filament\Front\Widgets;

use App\Models\Article;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class ArticleWidget extends TableWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(Article::latest())
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('thumbnail')
                            ->label(__('Thumbnail'))
                            ->alignCenter()
                            ->disk('public')
                            ->square()
                            ->imageSize('100%'),
                    ])->alignment('center'),

                    Stack::make([
                        TextColumn::make('title')
                            ->label(__('Title'))
                            ->weight(FontWeight::ExtraBold)
                            ->searchable()
                            ->wrap()
                            ->extraAttributes(['class' => 'text-lg']),

                        TextColumn::make('content')
                            ->formatStateUsing(function ($state) {
                                return \Illuminate\Support\Str::words(strip_tags($state), 8, '...');
                            })
                            ->wrap()
                            ->extraAttributes(['class' => 'text-gray-500 text-sm']),

                        TextColumn::make('author_name')
                            ->label(__('Author'))
                            ->icon('heroicon-o-user')
                            ->color('gray')
                            ->getStateUsing(fn ($record) => $record->author_name ?? 'Admin'),

                        TextColumn::make('published_at')
                            ->label(__('Published'))
                            ->dateTime('M j, Y')
                            ->color(fn ($record) => $record->published_at ? 'success' : 'warning')
                            ->icon(fn ($record) => $record->published_at ? 'heroicon-o-check-circle' : 'heroicon-o-clock'),
                    ])->space(2),

                ])->from('md')->columnSpanFull(),
            ])
            ->contentGrid([
                'default' => 1,
                'md' => 2,
                'lg' => 2,
                'xl' => 2,
            ])
            ->recordAction('view')
            ->recordUrl(fn ($record) => url("/article/{$record->slug}"))
            ->deferLoading()
            ->paginated([10, 25]);
    }
}
