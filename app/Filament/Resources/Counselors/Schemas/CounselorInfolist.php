<?php

namespace App\Filament\Resources\Counselors\Schemas;

use App\Models\Counselor;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CounselorInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user.name')
                    ->label('User'),
                TextEntry::make('registration_number'),
                TextEntry::make('degree'),
                TextEntry::make('province'),
                TextEntry::make('city'),
                TextEntry::make('whatsapp_number'),
                TextEntry::make('contact_email'),
                TextEntry::make('profile_photo')
                    ->placeholder('-'),
                TextEntry::make('instagram_link')
                    ->placeholder('-'),
                TextEntry::make('tiktok_link')
                    ->placeholder('-'),
                TextEntry::make('facebook_link')
                    ->placeholder('-'),
                TextEntry::make('validation_status'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (Counselor $record): bool => $record->trashed()),
            ]);
    }
}
