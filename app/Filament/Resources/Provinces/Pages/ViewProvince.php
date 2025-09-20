<?php

namespace App\Filament\Resources\Provinces\Pages;

use App\Filament\Resources\Provinces\ProvinceResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProvince extends ViewRecord
{
    protected static string $resource = ProvinceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
