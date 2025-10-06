<?php

namespace App\Filament\Front\Pages;

use App\Models\Event;
use Filament\Actions\Action;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Tapp\FilamentSocialShare\Actions\SocialShareAction;

class EventDetail extends Page implements HasInfolists
{
    use InteractsWithInfolists;

    public Event $event;

    protected static ?string $slug = 'event/{slug}';

    protected static bool $shouldRegisterNavigation = false;

    public array $data = [];

    protected string $view = 'filament.front.pages.event-detail';

    public function mount($slug): void
    {
        $this->event = Event::where('slug', $slug)->first();
    }

    public function getViewData(): array
    {
        return [
            'record' => $this->event,
        ];
    }

    public function eventDetailInfolists(Schema $schema): Schema
    {
        return $schema
            ->record($this->event)
            ->components([
                Section::make()
                    ->schema([
                        TextEntry::make('location')
                            ->label('Location')
                            ->extraAttributes(['class' => 'text-sm text-gray-600'])
                            ->inlineLabel(),
                        TextEntry::make('start_date')
                            ->label('Start Date')
                            ->inlineLabel()
                            ->dateTime('d M Y')
                            ->extraAttributes(['class' => 'text-sm text-gray-600']),
                        TextEntry::make('end_date')
                            ->label('End Date')
                            ->inlineLabel()
                            ->dateTime('d M Y')
                            ->extraAttributes(['class' => 'text-sm text-gray-600']),
                        TextEntry::make('organizer')
                            ->label('Organizer')
                            ->extraAttributes(['class' => 'text-sm text-gray-600'])
                            ->inlineLabel(),
                        TextEntry::make('description')
                            ->html()
                            ->hiddenLabel()
                            ->columnSpanFull(),
                    ])
                    ->footerActions([
                        Action::make('registration_link')
                            ->label('Registration Link')
                            ->url($this->event->registration_link)
                            ->openUrlInNewTab()
                            ->extraAttributes(['class' => 'event-button']),

                        SocialShareAction::make()
                            ->x()
                            ->facebook()
                            ->linkedin()
                            ->email(),
                    ]),
            ]);
    }
}
