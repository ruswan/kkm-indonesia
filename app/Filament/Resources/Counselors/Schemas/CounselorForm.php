<?php

namespace App\Filament\Resources\Counselors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CounselorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('full_name')
                            ->required()
                            ->maxLength(150),
                        TextInput::make('registration_number')
                            ->required(),
                        TextInput::make('degree')
                            ->required(),
                        Select::make('province_id')
                            ->relationship('province', 'name')
                            ->preload()
                            ->searchable()
                            ->required(),
                        Select::make('regency_id')
                            ->relationship('regency', 'name')
                            ->preload()
                            ->searchable()
                            ->required(),
                        TextInput::make('whatsapp_number')
                            ->required(),
                        TextInput::make('contact_email')
                            ->email()
                            ->required(),
                        FileUpload::make('profile_photo')
                            ->image()
                            ->nullable(),
                        TextInput::make('instagram_link')
                            ->label('Instagram Account')
                            ->helperText('Start with @'),
                        TextInput::make('tiktok_link')
                            ->label('TikTok Account')
                            ->helperText('Start with @'),
                        TextInput::make('facebook_link')
                            ->label('Facebook Account')
                            ->helperText('Only username, without https://facebook.com/'),
                        Select::make('status_id')
                            ->relationship('status', 'name')
                            ->preload()
                            ->searchable()
                            ->required(),
                    ])->columnSpanFull()
                    ->columns(2),
            ]);
    }
}
