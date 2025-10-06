<?php

namespace App\Filament\Resources\Provinces\Tables;

use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProvincesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID'),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('regencies_count')
                    ->counts('regencies')
                    ->sortable()
                    ->alignCenter()
                    ->label('Regencies Count'),
                TextColumn::make('counselors_count')
                    ->counts('counselors')
                    ->sortable()
                    ->alignCenter()
                    ->label('Counselors Count'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
            ]);
    }
}
