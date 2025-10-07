<?php

namespace App\Filament\Front\Pages;

use App\Models\Gallery;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Tapp\FilamentSocialShare\Actions\SocialShareAction;

class GalleryDetail extends Page implements HasInfolists
{
    use InteractsWithInfolists;

    public Gallery $gallery;

    protected static ?string $slug = 'galeri/{slug}';

    protected static bool $shouldRegisterNavigation = false;

    public array $data = [];

    protected string $view = 'filament.front.pages.gallery-detail';

    public function mount($slug): void
    {
        $this->gallery = Gallery::where('slug', $slug)->first();
    }

    public function getViewData(): array
    {
        return [
            'record' => $this->gallery,
        ];
    }

    public function galleryDetailInfolists(Schema $schema): Schema
    {
        return $schema
            ->record($this->gallery)
            ->components([
                Section::make()
                    ->schema([
                        TextEntry::make('description')
                            ->hiddenLabel()
                            ->columnSpanFull()
                            ->html()
                            ->extraAttributes(['class' => 'text-gray-700 mt-2']),
                        RepeatableEntry::make('images')
                            ->hiddenLabel()
                            ->columnSpanFull()
                            ->schema([
                                ImageEntry::make('image_path')
                                    ->hiddenLabel()
                                    ->disk('public')
                                    ->size('100%')
                                    ->extraAttributes([
                                        'class' => 'w-full rounded-lg shadow-md',
                                        'style' => 'width: 100%; height: auto; object-fit: cover;',
                                    ]),
                                TextEntry::make('title')
                                    ->hiddenLabel()
                                    ->extraAttributes([
                                        'class' => 'text-center text-sm font-medium text-gray-700 mt-2 block',
                                    ])
                                    ->default('Gambar Galeri'),
                            ])
                            ->extraAttributes([
                                'class' => 'grid grid-cols-1 gap-6 mt-6',
                            ]),

                        SocialShareAction::make()
                            ->label('Share')
                            ->tooltip('Share this article')
                            ->modalHeading('Share this article')
                            ->x()
                            ->facebook()
                            ->linkedin()
                            ->email(),
                    ]),
            ]);
    }
}
