<?php

namespace App\Filament\Resources\Counselors\Pages;

use App\Filament\Resources\Counselors\CounselorResource;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;

class CreateCounselor extends CreateRecord
{
    protected static string $resource = CounselorResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $user = User::where('email', $data['contact_email'])->first();
        if ($user) {
            $data['user_id'] = $user->id;
        } else {
            $newUser = User::create([
                'name' => $data['full_name'],
                'email' => $data['contact_email'],
                'password' => bcrypt($data['whatsapp_number']),
            ]);
            $data['user_id'] = $newUser->id;
        }

        unset($data['full_name']);

        return $data;
    }
}
