<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EventInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextEntry::make('name'),
                        TextEntry::make('description')
                            ->html()
                            ->columnSpanFull(),
                        TextEntry::make('start_date')
                            ->date(),
                        TextEntry::make('end_date')
                            ->date(),
                        TextEntry::make('location'),
                        TextEntry::make('registration_link')
                            ->placeholder('-'),
                        TextEntry::make('organizer'),
                    ]),
            ]);
    }
}
