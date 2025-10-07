<?php

namespace App\Filament\Front\Pages;

use App\Models\Gallery as ModelsGallery;
use Filament\Pages\Page;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class Gallery extends Page implements HasTable
{
    use InteractsWithTable;

    protected string $view = 'filament.front.pages.gallery';

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationLabel = 'Galeri Kegiatan';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Galeri Foto Kegiatan Kami')
            ->query(ModelsGallery::query()->whereHas('images'))
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('images')
                            ->getStateUsing(
                                fn ($record) => $record->images()->latest()->first()
                                    ? Storage::disk('public')->url($record->images()->latest()->first()->image_path)
                                    : null
                            )
                            ->square()
                            ->imageSize('100%')
                            ->extraAttributes([
                                'class' => 'rounded-lg shadow-lg object-cover w-full h-full aspect-square',
                                'style' => 'object-fit: cover; aspect-ratio: 3/2;',
                            ])
                            ->url(fn ($record) => '/galeri/'.$record->slug),
                        TextColumn::make('title')
                            ->searchable()
                            ->extraAttributes(['class' => 'text-lg font-bold mt-4']),
                    ]),
                ]),
            ])
            ->contentGrid([
                'default' => 2,
                'md' => 3,
                'lg' => 3,
                'xl' => 3,
            ]);
    }
}
