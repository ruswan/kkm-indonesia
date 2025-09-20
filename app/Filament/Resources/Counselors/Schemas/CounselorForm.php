<?php

namespace App\Filament\Resources\Counselors\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CounselorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('registration_number')
                    ->required(),
                TextInput::make('degree')
                    ->required(),
                TextInput::make('province')
                    ->required(),
                TextInput::make('city')
                    ->required(),
                TextInput::make('whatsapp_number')
                    ->required(),
                TextInput::make('contact_email')
                    ->email()
                    ->required(),
                TextInput::make('profile_photo'),
                TextInput::make('instagram_link'),
                TextInput::make('tiktok_link'),
                TextInput::make('facebook_link'),
                TextInput::make('validation_status')
                    ->required()
                    ->default('pending'),
            ]);
    }
}
