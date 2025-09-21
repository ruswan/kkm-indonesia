<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columns(1)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        RichEditor::make('description')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
