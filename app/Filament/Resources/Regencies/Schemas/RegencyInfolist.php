<?php

namespace App\Filament\Resources\Regencies\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RegencyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('ID'),
                TextEntry::make('province.name')
                    ->label('Province'),
                TextEntry::make('name'),
            ]);
    }
}
