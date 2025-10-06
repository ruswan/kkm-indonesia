<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->columnSpanFull()
                            ->label(__('Event Name'))
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        TextInput::make('slug')
                            ->label(__('Slug'))
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->columnSpanFull()
                            ->readOnly(),
                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull()
                            ->label(__('Event Description')),
                        DatePicker::make('start_date')
                            ->required()
                            ->label(__('Start Date')),
                        DatePicker::make('end_date')
                            ->required()
                            ->label(__('End Date')),
                        TextInput::make('location')
                            ->required()
                            ->label(__('Location')),
                        TextInput::make('registration_link')
                            ->url()
                            ->label(__('Registration Link')),
                        TextInput::make('organizer')
                            ->required()
                            ->label(__('Organizer')),
                    ]),
            ]);
    }
}
