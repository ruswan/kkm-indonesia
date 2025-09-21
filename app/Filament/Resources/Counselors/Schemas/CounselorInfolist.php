<?php

namespace App\Filament\Resources\Counselors\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CounselorInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextEntry::make('user.name')
                            ->label(__('Full Name')),
                        TextEntry::make('registration_number')
                            ->label(__('Registration Number')),
                        TextEntry::make('degree')
                            ->label(__('Degree')),
                        TextEntry::make('province.name')
                            ->label(__('Province')),
                        TextEntry::make('regency.name')
                            ->label(__('Regancy')),
                        TextEntry::make('whatsapp_number')
                            ->label(__('WhatsApp Number')),
                        TextEntry::make('contact_email')
                            ->label(__('Contact Email')),
                        TextEntry::make('profile_photo')
                            ->label(__('Profile Photo'))
                            ->placeholder('-'),
                        TextEntry::make('instagram_link')
                            ->label(__('Instagram Link'))
                            ->placeholder('-'),
                        TextEntry::make('tiktok_link')
                            ->label(__('TikTok Link'))
                            ->placeholder('-'),
                        TextEntry::make('facebook_link')
                            ->label(__('Facebook Link'))
                            ->placeholder('-'),
                    ])->columnSpanFull()
                    ->columns(2),
            ]);
    }
}
