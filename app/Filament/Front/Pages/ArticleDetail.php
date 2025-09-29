<?php

namespace App\Filament\Front\Pages;

use App\Models\Article;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Pages\Page;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ArticleDetail extends Page implements HasInfolists
{
    use InteractsWithInfolists;

    public Article $article;

    protected string $view = 'filament.front.pages.article-detail';

    protected static ?string $slug = 'article/{slug}';

    protected static bool $shouldRegisterNavigation = false;

    public array $data = [];

    public function mount($slug): void
    {
        $this->data['slug'] = $slug;
        $this->article = Article::where('slug', $slug)
            ->with(['author'])
            ->first();
    }

    public function getViewData(): array
    {
        return [
            'record' => $this->article,
        ];
    }

    public function articleDetailInfolist(Schema $schema): Schema
    {
        return $schema
            ->record($this->article)
            ->components([
                ImageEntry::make('thumbnail')
                    ->label('Thumbnail')
                    ->hiddenLabel()
                    ->columnSpanFull()
                    ->imageWidth('100%')
                    ->imageHeight('auto')
                    ->extraAttributes(['class' => 'thumbnail-image']),
                Section::make()
                    ->schema([
                        TextEntry::make('title')
                            ->hiddenLabel()
                            ->columnSpanFull()
                            ->extraAttributes(['class' => 'text-2xl lg:text-3xl font-bold text-gray-900 leading-tight']),
                        Grid::make()
                            ->schema([
                                TextEntry::make('author.name')
                                    ->label('Author')
                                    ->extraAttributes(['class' => 'text-sm text-gray-600']),
                                TextEntry::make('created_at')
                                    ->label('Published on')
                                    ->dateTime('d M Y')
                                    ->extraAttributes(['class' => 'text-sm text-gray-600']),
                            ])
                            ->columns(8)
                            ->columnSpanFull(),
                        TextEntry::make('content')
                            ->hiddenLabel()
                            ->columnSpanFull()
                            ->html()
                            ->extraAttributes(['class' => 'prose lg:prose-lg max-w-none text-gray-800 mt-4']),
                    ])
                    ->columnSpanFull(),
            ])
            ->columns(2);
    }
}
