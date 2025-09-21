<?php

namespace App\Filament\Resources\Counselors\Pages;

use App\Filament\Resources\Counselors\CounselorResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCounselor extends EditRecord
{
    protected static string $resource = CounselorResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $user = $this->record->user;
        $data['full_name'] = $user->name ?? '';

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['full_name'])) {
            $user = $this->record->user;
            if ($user) {
                $user->name = $data['full_name'];
                $user->save();
            }
            unset($data['full_name']);
        }

        return $data;
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
