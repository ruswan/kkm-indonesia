<?php

namespace App\Filament\Front\Pages;

use App\Models\Article as ArticleModel;
use Filament\Pages\Page;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Support\Enums\FontWeight;

use Filament\Tables\Concerns\InteractsWithTable;

class Article extends Page implements HasTable
{
    use InteractsWithTable;

    protected string $view = 'filament.front.pages.article';

    public function table(Table $table): Table
    {
        return $table
            ->query(ArticleModel::latest())
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('thumbnail')
                            ->label(__('Thumbnail'))
                            ->alignCenter()
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
                                return \Illuminate\Support\Str::words(strip_tags($state), 10, '...');
                            })
                            ->wrap()
                            ->extraAttributes(['class' => 'text-gray-500 text-sm']),

                        TextColumn::make('author.name')
                            ->label(__('Author'))
                            ->icon('heroicon-o-user')
                            ->color('gray'),

                        TextColumn::make('published_at')
                            ->label(__('Published'))
                            ->dateTime('M j, Y')
                            ->color(fn($record) => $record->published_at ? 'success' : 'warning')
                            ->icon(fn($record) => $record->published_at ? 'heroicon-o-check-circle' : 'heroicon-o-clock'),
                    ])->space(2),

                ])->from('md')->columnSpanFull(),
            ])
            ->contentGrid([
                'default' => 1,
                'md' => 2,
                'lg' => 2,
                'xl' => 2,
            ])
            ->deferLoading();
    }
}
