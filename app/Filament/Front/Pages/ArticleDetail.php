<?php

namespace App\Filament\Front\Pages;

use App\Models\Article;
use Filament\Pages\Page;

class ArticleDetail extends Page
{
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
}
