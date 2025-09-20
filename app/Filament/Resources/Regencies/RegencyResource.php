<?php

namespace App\Filament\Resources\Regencies;

use App\Filament\Resources\Regencies\Pages\CreateRegency;
use App\Filament\Resources\Regencies\Pages\EditRegency;
use App\Filament\Resources\Regencies\Pages\ListRegencies;
use App\Filament\Resources\Regencies\Pages\ViewRegency;
use App\Filament\Resources\Regencies\Schemas\RegencyForm;
use App\Filament\Resources\Regencies\Schemas\RegencyInfolist;
use App\Filament\Resources\Regencies\Tables\RegenciesTable;
use App\Models\Regency;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RegencyResource extends Resource
{
    protected static ?string $model = Regency::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return RegencyForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RegencyInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RegenciesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRegencies::route('/'),
            'create' => CreateRegency::route('/create'),
            'view' => ViewRegency::route('/{record}'),
            'edit' => EditRegency::route('/{record}/edit'),
        ];
    }
}
