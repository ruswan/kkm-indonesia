<?php

namespace App\Filament\Front\Pages;

use App\Filament\Front\Widgets\ArticleWidget;
use Filament\Pages\Page;

class Article extends Page
{
    protected string $view = 'filament.front.pages.article';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationLabel = 'Artikel';

    protected function getHeaderWidgets(): array
    {
        return [
            ArticleWidget::class,
        ];
    }
}
