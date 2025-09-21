<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GalleryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('title'),
                        TextEntry::make('description')
                            ->html()
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
