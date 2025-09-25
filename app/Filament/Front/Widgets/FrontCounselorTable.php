<?php

namespace App\Filament\Front\Widgets;

use App\Models\Counselor;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Widgets\TableWidget;
use Filament\Actions\BulkActionGroup;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use ToneGabes\Filament\Icons\Enums\Phosphor;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class FrontCounselorTable extends TableWidget
{

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Direktori Konselor')
            ->query(fn(): Builder => Counselor::query())
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('profile_photo')
                            ->label(__('Photo'))
                            ->alignCenter()
                            ->square()
                            ->imageSize(100, 100),
                    ]),
                    Stack::make([
                        TextColumn::make('user.name')
                            ->weight(FontWeight::ExtraBold),
                        TextColumn::make('registration_number')
                            ->searchable()
                            ->extraAttributes(['class' => 'italic']),
                        TextColumn::make('regency.name')
                            ->searchable(),
                    ]),

                ])->columnSpanFull(),
                Panel::make([
                    TextColumn::make('whatsapp_number')
                        ->icon(Phosphor::WhatsappLogo)
                        ->url(fn(Counselor $record): ?string => $record->whatsapp_number ? 'https://wa.me/' . preg_replace('/[^0-9]/', '', $record->whatsapp_number) : null)
                        ->openUrlInNewTab()
                        ->visible(fn(?Counselor $record): bool => $record && !empty($record->whatsapp_number)),
                    TextColumn::make('instagram_link')
                        ->icon(Phosphor::InstagramLogo)
                        ->url(fn(Counselor $record): ?string => $record->instagram_link ? 'https://instagram.com/' . ltrim($record->instagram_link, '@') : null)
                        ->openUrlInNewTab()
                        ->visible(fn(?Counselor $record): bool => $record && !empty($record->instagram_link)),
                    TextColumn::make('tiktok_link')
                        ->icon(Phosphor::TiktokLogo)
                        ->url(fn(Counselor $record): ?string => $record->tiktok_link ? 'https://tiktok.com/@' . ltrim($record->tiktok_link, '@') : null)
                        ->openUrlInNewTab()
                        ->visible(fn(?Counselor $record): bool => $record && !empty($record->tiktok_link)),
                    TextColumn::make('facebook_link')
                        ->icon(Phosphor::FacebookLogo)
                        ->url(fn(Counselor $record): ?string => $record->facebook_link ? 'https://facebook.com/' . ltrim($record->facebook_link, '@') : null)
                        ->openUrlInNewTab()
                        ->visible(fn(?Counselor $record): bool => $record && !empty($record->facebook_link)),
                    TextColumn::make('contact_email')
                        ->icon(Phosphor::Envelope)
                        ->url(fn(Counselor $record): string => 'mailto:' . $record->contact_email)
                        ->openUrlInNewTab()
                        ->visible(fn(?Counselor $record): bool => $record && !empty($record->contact_email)),
                ])->collapsible(),
            ])
            ->contentGrid([
                'default' => 1,
                'md' => 3,
                'lg' => 3,
                'xl' => 4,
            ])
            ->filters([
                //
            ])
            ->paginated(false);
    }
}
