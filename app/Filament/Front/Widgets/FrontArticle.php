<?php

namespace App\Filament\Front\Widgets;

use Filament\Widgets\Widget;

class FrontArticle extends Widget
{
    protected int|string|array $columnSpan = 'full';

    protected string $view = 'filament.front.widgets.front-article';
}
